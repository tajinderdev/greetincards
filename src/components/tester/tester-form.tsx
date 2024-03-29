import Button from '@/components/ui/button';
import Input from '@/components/ui/input';
import { Controller, useFieldArray, useForm } from 'react-hook-form';
import { useTranslation } from 'next-i18next';
import { yupResolver } from '@hookform/resolvers/yup';
import Description from '@/components/ui/description';
import Card from '@/components/common/card';
import FileInput from '@/components/ui/file-input';
import TextArea from '@/components/ui/text-area';
import { shopValidationSchema } from './tester-validation-schema';
import { getFormattedImage } from '@/utils/get-formatted-image';
import { useCreateShopMutation, useUpdateShopMutation } from '@/data/shop';
import {
  BalanceInput,
  ShopSettings,
  ShopSocialInput,
  UserAddressInput,
} from '@/types';
import GooglePlacesAutocomplete from '@/components/form/google-places-autocomplete';
import Label from '@/components/ui/label';
import { getIcon } from '@/utils/get-icon';
import SelectInput from '@/components/ui/select-input';
import * as socialIcons from '@/components/icons/social';
import omit from 'lodash/omit';
import { httpPatch, httpPost } from '@/config/utils';
import { CREATE_SHOP, UPDATE_SHOP } from '@/config/endPoints';
import { useEffect, useState } from 'react';
import { toast } from "react-toastify";
import { errorToaster, successToaster } from "@/components/Toaster";
import { ERROR_MESSAGE, SHOP_CREATED, SHOP_UPDATED } from '@/config/messages';
import { tosterTime } from '@/config/const';
import { useRouter } from 'next/router'


const socialIcon = [
  {
    value: 'FacebookIcon',
    label: 'Facebook',
  },
  {
    value: 'InstagramIcon',
    label: 'Instagram',
  },
  {
    value: 'TwitterIcon',
    label: 'Twitter',
  },
  {
    value: 'YouTubeIcon',
    label: 'Youtube',
  },
];

export const updatedIcons = socialIcon.map((item: any) => {
  item.label = (
    <div className="space-s-4 flex items-center text-body">
      <span className="flex h-4 w-4 items-center justify-center">
        {getIcon({
          iconList: socialIcons,
          iconName: item.value,
          className: 'w-4 h-4',
        })}
      </span>
      <span>{item.label}</span>
    </div>
  );
  return item;
});

type FormValues = {
  name: string;
  companyName: string;
  email: string;
  phone: number;
  cover_image: any;
  logo: any;
  balance: BalanceInput;
  address: UserAddressInput;
  settings: ShopSettings;
};

const ShopForm = ({ initialValues }: { initialValues?: any}) => {

  const router = useRouter()

  const [errorMessage, setErrorMessage] = useState<string | null>(null);
  const { mutate: createShop, isLoading: creating } = useCreateShopMutation();
  const { mutate: updateShop, isLoading: updating } = useUpdateShopMutation();
  const [shopData,setShopData] = useState(JSON.parse(localStorage.getItem('shopData')));
  console.log('cccc',shopData)
  const {
    register,
    handleSubmit,
    formState: { errors },
    getValues,
    control,
  } = useForm<FormValues>({
    shouldUnregister: true,
    ...(initialValues
      ? {
          defaultValues: {
            ...initialValues,
            logo: getFormattedImage(initialValues.logo),
            cover_image: getFormattedImage(initialValues.cover_image),
            settings: {
              ...initialValues?.settings,
              socials: initialValues?.settings?.socials
                ? initialValues?.settings?.socials.map((social: any) => ({
                    icon: updatedIcons?.find(
                      (icon) => icon?.value === social?.icon
                    ),
                    url: social?.url,
                  }))
                : [],
            },
          },
        }
      : {}),
    resolver: yupResolver(shopValidationSchema),
  });
  const { t } = useTranslation();
  const { fields, append, remove } = useFieldArray({
    control,
    name: 'settings.socials',
  });

 async function onSubmit(values: FormValues) {
    if (initialValues) {
      const { ...restAddress } = values.address;
      updateShop({
        id: initialValues.id,
        ...values,
        address: restAddress,
        settings,
        balance: {
          id: initialValues.balance?.id,
          ...values.balance,
        },
      });
    } else {
      console.log('values---',values)
      if(shopData){
        console.log('update shop')
        let data = {
          name:values?.name,
          company_name:values?.companyName,
          address:values?.address?.address,
          country:values?.address?.country,
          post_code:values?.address?.post_code,
          email:values?.email,
          phone:values?.phone
        }
        let res = await httpPatch(`${UPDATE_SHOP}/${shopData.id}`, data);
        if(res?.status == 200){
          router.push('/shops')
          successToaster(SHOP_UPDATED);
          localStorage.removeItem('shopData')
          setTimeout(() => {
            toast.dismiss();
          }, tosterTime);
        }else{
          errorToaster(ERROR_MESSAGE);
          setTimeout(() => {
            toast.dismiss();
          }, tosterTime);
        }
      }else{
        let data = {
          name:values?.name,
          company_name:values?.companyName,
          address:values?.address?.address,
          country:values?.address?.country,
          post_code:values?.address?.post_code,
          email:values?.email,
          phone:values?.phone
        }
        let res = await httpPost(`${CREATE_SHOP}`, data);
        if(res?.status == 200){
          router.push('/shops')
          successToaster(SHOP_CREATED);
          setTimeout(() => {
            toast.dismiss();
          }, tosterTime);
        }else{
          errorToaster(ERROR_MESSAGE);
          setTimeout(() => {
            toast.dismiss();
          }, tosterTime);
        }
      }
     
      
    }
  }


  // function onSubmit(values: FormValues) {
  //   const settings = {
  //     ...values?.settings,
  //     location: { ...omit(values?.settings?.location, '__typename') },
  //     socials: values?.settings?.socials
  //       ? values?.settings?.socials?.map((social: any) => ({
  //           icon: social?.icon?.value,
  //           url: social?.url,
  //         }))
  //       : [],
  //   };
  //   if (initialValues) {
  //     const { ...restAddress } = values.address;
  //     updateShop({
  //       id: initialValues.id,
  //       ...values,
  //       address: restAddress,
  //       settings,
  //       balance: {
  //         id: initialValues.balance?.id,
  //         ...values.balance,
  //       },
  //     });
  //   } else {
  //     createShop({
  //       ...values,
  //       settings,
  //       balance: {
  //         ...values.balance,
  //       },
  //     });
  //   }
  // }

  const coverImageInformation = (
    <span>
      {t('form:shop-cover-image-help-text')} <br />
      {t('form:cover-image-dimension-help-text')} &nbsp;
      <span className="font-bold">1170 x 435{t('common:text-px')}</span>
    </span>
  );

  useEffect(()=>{
    console.log('getData--')
  },[])

  return (
    <>
      <form onSubmit={handleSubmit(onSubmit)} noValidate>
        {/* <div className="my-5 flex flex-wrap border-b border-dashed border-border-base pb-8 sm:my-8">
          <Description
            title={t('form:input-label-logo')}
            details={t('form:shop-logo-help-text')}
            className="sm:pe-4 md:pe-5 w-full px-0 pb-5 sm:w-4/12 sm:py-8 md:w-1/3"
          />

          <Card className="w-full sm:w-8/12 md:w-2/3">
            <FileInput name="logo" control={control} multiple={false} />
          </Card>
        </div>
        <div className="my-5 flex flex-wrap border-b border-dashed border-border-base pb-8 sm:my-8">
          <Description
            title={t('form:shop-cover-image-title')}
            details={coverImageInformation}
            className="sm:pe-4 md:pe-5 w-full px-0 pb-5 sm:w-4/12 sm:py-8 md:w-1/3"
          />

          <Card className="w-full sm:w-8/12 md:w-2/3">
            <FileInput name="cover_image" control={control} multiple={false} />
          </Card>
        </div> */}
        <div className="my-5 flex flex-wrap border-b border-dashed border-border-base pb-8 sm:my-8">
          <Description
            title={t('form:shop-basic-info')}
            details={t('form:shop-basic-info-help-text')}
            className="sm:pe-4 md:pe-5 w-full px-0 pb-5 sm:w-4/12 sm:py-8 md:w-1/3"
          />
          <Card className="w-full sm:w-8/12 md:w-2/3">
            <Input
              label={t('form:input-label-name')}
              {...register('name')}
              variant="outline"
              className="mb-5"
              defaultValue={(shopData?.name) ? (shopData?.name) : ''}
              error={t(errors.name?.message!)}
            />
              <Input
              label={t('form:input-label-company-name')}
              {...register('companyName')}
              variant="outline"
              className="mb-5"
              defaultValue={(shopData?.company_name) ? (shopData?.company_name) : ''}
              error={t(errors.companyName?.message!)}
            />
            {/* <TextArea
              label={t('form:input-label-company-name')}
              {...register('companyName')}
              variant="outline"
              error={t(errors.companyName?.message!)}
            /> */}
              <Input
              label={t('form:input-label-email')}
              {...register('email')}
              variant="outline"
              className="mb-5"
              defaultValue={(shopData?.email) ? (shopData?.email) : ''}
              error={t(errors.email?.message!)}
            />
              <Input
              label={t('form:input-label-phone')}
              {...register('phone')}
              variant="outline"
              className="mb-5"
              defaultValue={(shopData?.phone) ? (shopData?.phone) : ''}
              error={t(errors.phone?.message!)}
            />
          </Card>
        </div>
        {/* <div className="my-5 flex flex-wrap border-b border-dashed border-gray-300 pb-8 sm:my-8">
          <Description
            title={t('form:shop-payment-info')}
            details={t('form:payment-info-helper-text')}
            className="sm:pe-4 md:pe-5 w-full px-0 pb-5 sm:w-4/12 sm:py-8 md:w-1/3"
          />

          <Card className="w-full sm:w-8/12 md:w-2/3">
            <Input
              label={t('form:input-label-account-holder-name')}
              {...register('balance.payment_info.name')}
              variant="outline"
              className="mb-5"
              error={t(errors.balance?.payment_info?.name?.message!)}
            />
            <Input
              label={t('form:input-label-account-holder-email')}
              {...register('balance.payment_info.email')}
              variant="outline"
              className="mb-5"
              error={t(errors.balance?.payment_info?.email?.message!)}
            />
            <Input
              label={t('form:input-label-bank-name')}
              {...register('balance.payment_info.bank')}
              variant="outline"
              className="mb-5"
              error={t(errors.balance?.payment_info?.bank?.message!)}
            />
            <Input
              label={t('form:input-label-account-number')}
              {...register('balance.payment_info.account')}
              variant="outline"
              error={t(errors.balance?.payment_info?.account?.message!)}
            />
          </Card>
        </div> */}
        <div className="my-5 flex flex-wrap border-b border-dashed border-gray-300 pb-8 sm:my-8">
          <Description
            title={t('form:shop-address')}
            details={t('form:shop-address-helper-text')}
            className="sm:pe-4 md:pe-5 w-full px-0 pb-5 sm:w-4/12 sm:py-8 md:w-1/3"
          />

          <Card className="w-full sm:w-8/12 md:w-2/3">
            <Input
              label={t('form:input-label-country')}
              {...register('address.country')}
              variant="outline"
              className="mb-5"
              defaultValue={(shopData?.phone) ? (shopData?.phone) : ''}
              error={t(errors.address?.country?.message!)}
            />
            {/* <Input
              label={t('form:input-label-city')}
              {...register('address.city')}
              variant="outline"
              className="mb-5"
              error={t(errors.address?.city?.message!)}
            />
            <Input
              label={t('form:input-label-state')}
              {...register('address.state')}
              variant="outline"
              className="mb-5"
              error={t(errors.address?.state?.message!)}
            /> */}
            <Input
              label={t('form:input-label-post_code')}
              {...register('address.post_code')}
              variant="outline"
              className="mb-5"
              defaultValue={(shopData?.post_code) ? (shopData?.post_code) : ''}
              error={t(errors.address?.post_code?.message!)}
            />
            <TextArea
              label={t('form:input-label-street-address')}
              {...register('address.address')}
              variant="outline"
              defaultValue={(shopData?.address) ? (shopData?.address) : ''}
              error={t(errors.address?.address?.message!)}
            />
          </Card>
        </div>
        {/* <div className="my-5 flex flex-wrap border-b border-dashed border-gray-300 pb-8 sm:my-8">
          <Description
            title={t('form:shop-settings')}
            details={t('form:shop-settings-helper-text')}
            className="sm:pe-4 md:pe-5 w-full px-0 pb-5 sm:w-4/12 sm:py-8 md:w-1/3"
          />

          <Card className="w-full sm:w-8/12 md:w-2/3">
            <div className="mb-5">
              <Label>{t('form:input-label-autocomplete')}</Label>
              <Controller
                control={control}
                name="settings.location"
                render={({ field: { onChange } }) => (
                  <GooglePlacesAutocomplete
                    onChange={onChange}
                    data={getValues('settings.location')!}
                  />
                )}
              />
            </div>
            <Input
              label={t('form:input-label-contact')}
              {...register('settings.contact')}
              variant="outline"
              className="mb-5"
              error={t(errors.settings?.contact?.message!)}
            />
            <Input
              label={t('form:input-label-website')}
              {...register('settings.website')}
              variant="outline"
              className="mb-5"
              error={t(errors.settings?.website?.message!)}
            />
            <div>
              {fields.map(
                (item: ShopSocialInput & { id: string }, index: number) => (
                  <div
                    className="border-b border-dashed border-border-200 py-5 first:mt-5 first:border-t last:border-b-0 md:py-8 md:first:mt-10"
                    key={item.id}
                  >
                    <div className="grid grid-cols-1 gap-5 sm:grid-cols-5">
                      <div className="sm:col-span-2">
                        <Label>{t('form:input-label-select-platform')}</Label>
                        <SelectInput
                          name={`settings.socials.${index}.icon` as const}
                          control={control}
                          options={updatedIcons}
                          isClearable={true}
                          defaultValue={item?.icon!}
                        />
                      </div>
                      <Input
                        className="sm:col-span-2"
                        label={t("form:input-label-icon")}
                        variant="outline"
                        {...register(`settings.socials.${index}.icon` as const)}
                        defaultValue={item?.icon!} // make sure to set up defaultValue
                      />
                      <Input
                        className="sm:col-span-2"
                        label={t('form:input-label-url')}
                        variant="outline"
                        {...register(`settings.socials.${index}.url` as const)}
                        defaultValue={item.url!} // make sure to set up defaultValue
                      />
                      <button
                        onClick={() => {
                          remove(index);
                        }}
                        type="button"
                        className="text-sm text-red-500 transition-colors duration-200 hover:text-red-700 focus:outline-none sm:col-span-1 sm:mt-4"
                      >
                        {t('form:button-label-remove')}
                      </button>
                    </div>
                  </div>
                )
              )}
            </div>
            <Button
              type="button"
              onClick={() => append({ icon: '', url: '' })}
              className="w-full sm:w-auto"
            >
              {t('form:button-label-add-social')}
            </Button>
          </Card>
        </div> */}

        <div className="text-end mb-5">
          <Button
            loading={creating || updating}
            disabled={creating || updating}
          >
            {initialValues
              ? t('form:button-label-update')
              : t('form:button-label-save')}
          </Button>
        </div>
      </form>
    </>
  );
};

export default ShopForm;
