import Button from '@/components/ui/button';
import Input from '@/components/ui/input';
import { Controller, useFieldArray, useForm } from 'react-hook-form';
import { useTranslation } from 'next-i18next';
import { yupResolver } from '@hookform/resolvers/yup';
import Description from '@/components/ui/description';
import Card from '@/components/common/card';
import FileInput from '@/components/ui/file-input';
import TextArea from '@/components/ui/text-area';
import { shopValidationSchema } from './designer-validation-schema';
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
import { httpGet, httpPatch, httpPost } from '@/config/utils';
import { CREATE_SHOP, CREATE_STORE, STORE_LIST, UPDATE_SHOP, UPDATE_STORE } from '@/config/endPoints';
import { useEffect, useState } from 'react';
import { toast } from "react-toastify";
import { errorToaster, successToaster } from "@/components/Toaster";
import { DESIGNER_CREATED, DESIGNER_UPDATED, ERROR_MESSAGE, SHOP_CREATED, SHOP_UPDATED, STORE_CREATED, STORE_UPDATED } from '@/config/messages';
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

const DesignerForm = ({ initialValues }: { initialValues?: any}) => {

  const router = useRouter()

  const [errorMessage, setErrorMessage] = useState<string | null>(null);
  const { mutate: createShop, isLoading: creating } = useCreateShopMutation();
  const { mutate: updateShop, isLoading: updating } = useUpdateShopMutation();
  const [designerData,setStoreData] = useState(JSON.parse(localStorage.getItem('dataForUpdate')));
  console.log('cccc',designerData)
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
      if(designerData){
        console.log('update Store')
        let data = {
          name:values?.name,
          company_name:values?.companyName,
          address:values?.address?.address,
          country:values?.address?.country,
          post_code:values?.address?.post_code,
          email:values?.email,
          phone:values?.phone
        }
        let res = await httpPatch(`${UPDATE_STORE}/${storeData.id}`, data);
        if(res?.status == 200){
          router.push('/designers')
          successToaster(DESIGNER_UPDATED);
          localStorage.removeItem('dataForUpdate')
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
        let res = await httpPost(`${CREATE_STORE}`, data);
        if(res?.status == 200){
          router.push('/designers')
          successToaster(DESIGNER_CREATED);
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

  const coverImageInformation = (
    <span>
      {t('form:shop-cover-image-help-text')} <br />
      {t('form:cover-image-dimension-help-text')} &nbsp;
      <span className="font-bold">1170 x 435{t('common:text-px')}</span>
    </span>
  );

  const getDesigner=async(designerId:any)=>{
    let designerdata = await httpGet(`${STORE_LIST}/${designerId}`);
    console.log('----designerdata',designerdata)
    if(designerdata.status == 200){
      setStoreData(designerdata.data.users);
      localStorage.setItem('dataForUpdate',JSON.stringify(designerdata.data.users))
    }
  }

  useEffect(()=>{
    let designerId = localStorage.getItem('idForUpdate')
    console.log('---data----00',getDesigner(designerId))
  },[])

  useEffect(()=>{
    console.log('getData--')
  },[])

  return (
    <>
      <form onSubmit={handleSubmit(onSubmit)} noValidate>
        <div className="my-5 flex flex-wrap border-b border-dashed border-border-base pb-8 sm:my-8">
          <Description
            title={t('form:shop-basic-info')}
            details='Add some basic info from here'
            className="sm:pe-4 md:pe-5 w-full px-0 pb-5 sm:w-4/12 sm:py-8 md:w-1/3"
          />
          <Card className="w-full sm:w-8/12 md:w-2/3">
            <Input
              label={t('form:input-label-name')}
              {...register('name')}
              variant="outline"
              className="mb-5"
              defaultValue={(designerData?.name) ? (designerData?.name) : ''}
              error={t(errors.name?.message!)}
            />
              <Input
              label={t('form:input-label-company-name')}
              {...register('companyName')}
              variant="outline"
              className="mb-5"
              defaultValue={(designerData?.company_name) ? (designerData?.company_name) : ''}
              error={t(errors.companyName?.message!)}
            />
              <Input
              label={t('form:input-label-email')}
              {...register('email')}
              variant="outline"
              className="mb-5"
              defaultValue={(designerData?.email) ? (designerData?.email) : ''}
              error={t(errors.email?.message!)}
            />
              <Input
              label={t('form:input-label-phone')}
              {...register('phone')}
              variant="outline"
              className="mb-5"
              defaultValue={(designerData?.phone) ? (designerData?.phone) : ''}
              error={t(errors.phone?.message!)}
            />
          </Card>
        </div>
        
        <div className="my-5 flex flex-wrap border-b border-dashed border-gray-300 pb-8 sm:my-8">
          <Description
            title={t('form:shop-address')}
            details='Add your physical address from here'
            // details={t('form:shop-address-helper-text')}
            className="sm:pe-4 md:pe-5 w-full px-0 pb-5 sm:w-4/12 sm:py-8 md:w-1/3"
          />

          <Card className="w-full sm:w-8/12 md:w-2/3">
            <Input
              label={t('form:input-label-country')}
              {...register('address.country')}
              variant="outline"
              className="mb-5"
              defaultValue={(designerData?.phone) ? (designerData?.phone) : ''}
              error={t(errors.address?.country?.message!)}
            />
            <Input
              label={t('form:input-label-post_code')}
              {...register('address.post_code')}
              variant="outline"
              className="mb-5"
              defaultValue={(designerData?.post_code) ? (designerData?.post_code) : ''}
              error={t(errors.address?.post_code?.message!)}
            />
            <TextArea
              label={t('form:input-label-street-address')}
              {...register('address.address')}
              variant="outline"
              defaultValue={(designerData?.address) ? (designerData?.address) : ''}
              error={t(errors.address?.address?.message!)}
            />
          </Card>
        </div>
       
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

export default DesignerForm;
