import Input from '@/components/ui/input';
import { useForm } from 'react-hook-form';
import Button from '@/components/ui/button';
import Description from '@/components/ui/description';
import Card from '@/components/common/card';
import { useUpdateUserMutation } from '@/data/user';
import TextArea from '@/components/ui/text-area';
import { useTranslation } from 'next-i18next';
import FileInput from '@/components/ui/file-input';
import pick from 'lodash/pick';
import { useEffect, useState } from 'react';
import { httpGet, httpPost } from '@/config/utils';
import { ERROR_MESSAGE, PROFILE_UPDATED } from '@/config/messages';
import { errorToaster, successToaster } from '../Toaster';
import { toast } from 'react-toastify';
import { tosterTime } from '@/config/const';
import { GET_PROFILE, UPDATE_PROFILE } from '@/config/endPoints';
import { Routes } from '@/config/routes';
import { useRouter } from 'next/router';
import { yupResolver } from '@hookform/resolvers/yup';
import * as yup from 'yup';

type FormValues = {
  name: string;
  email: string;
  role: string;
  phone: string;
  dob: string;
  address: string;
  country: string;
  country_code: string;
  currency_code: string;
  post_code: string;
  company_name: string;
  status: string;
  password: string;
  settings: string;
  role_name: string,
  profile: {
    id: string;
    bio: string;
    contact: string;
    avatar: {
      thumbnail: string;
      original: string;
      id: string;
    };
  };
};

const profileFormSchema = yup.object().shape({
  name: yup.string().required('form:error-name-required'),
  email: yup
    .string()
    .email('form:error-email-format')
    .required('form:error-email-required'),
  // password: yup.string().required('form:error-password-required'),
  phone: yup.string().required('Phone is required'),
  dob: yup.string().required('DOB is required'),
  address: yup.string().required('Address is required'),
  settings: yup.string().required('Setting is required'),
  country: yup.string().required('Country is required'),
  country_code: yup.string().required('Country code is required'),
  currency_code: yup.string().required('Currency code is required'),
  post_code: yup.string().required('Post Code is required'),
  company_name: yup.string().required('Company name Code is required'),
  status: yup.string().required('Status Code is required'),
});

if (typeof window !== 'undefined') {
  let item = localStorage.getItem('userProfile')

  if (item) {
    var data = JSON.parse(item)
  }
}


export default function ProfileUpdate({ me }: any) {
  const { t } = useTranslation();
  const [userData, setUserData] = useState(data);
  const [userProfile, setUserProfile] = useState();
  const router = useRouter()
  
  console.log('userData---', userData)

  const { mutate: updateUser, isLoading: loading } = useUpdateUserMutation();
  const {
    register,
    handleSubmit,
    control,
    formState: { errors },
  } = useForm<FormValues>({
    resolver: yupResolver(profileFormSchema),
    defaultValues: {
      ...(me &&
        pick(me, ['name', 'profile.bio', 'profile.contact', 'profile.avatar', 'email', 'role_name'])),
    },
  });

  async function onSubmit(values: FormValues) {
    const { name, profile } = values;
    // updateUser({
    //   id: me?.id,
    //   input: {
    //     name: name,
    //     profile: {
    //       id: me?.profile?.id,
    //       bio: profile?.bio,
    //       contact: profile?.contact,
    //       avatar: {
    //         thumbnail: profile?.avatar?.thumbnail,
    //         original: profile?.avatar?.original,
    //         id: profile?.avatar?.id,
    //       },
    //     },
    //   },
    // });
    let data = {
      name: values?.name,
      email: values?.email,
      role_name: values?.role_name,
      role: values?.role_name,
      address: values?.address,
      country: values?.country,
      country_code: values?.country_code,
      currency_code: values?.currency_code,
      post_code: values?.post_code,
      company_name: values?.company_name,
      status: values?.status,
      dob: values?.dob,
      phone: values?.phone,
      // password: values?.password,
      settings: values?.settings
    }
    console.log('******',data)
    let res = await httpPost(`${UPDATE_PROFILE}/${userData?.id}/update/`, data);
    if (res?.status == 200) {
      localStorage.setItem('userProfile', JSON.stringify(data));
      getUserInfo();
      // router.reload();
      successToaster(PROFILE_UPDATED);
      setTimeout(() => {
        toast.dismiss();
      }, tosterTime);
    } else {
      errorToaster(ERROR_MESSAGE);
      setTimeout(() => {
        toast.dismiss();
      }, tosterTime);
    }
  }


  const getUserInfo = async () => {
    let response = await httpGet(`${GET_PROFILE}/${userData?.id}`);
    console.log('res--', response.data.users)
    if(response.status == 200){
      setUserData(response.data.users)
    }
  }
  useEffect(() => {
    // let res =  httpGet(`${UPDATE_PROFILE}/${userData?.id}`, data);
    getUserInfo();
  }, []);

  const createAvatar = () => {
    router.push('avatarPage')
  }

  useEffect(() => {
    let data = localStorage.getItem('token');
  })

  console.log('userData---148', userData,'----',userData?.name)

  return (
    <form onSubmit={handleSubmit(onSubmit)}>
      <div className="my-5 flex flex-wrap border-b border-dashed border-border-base pb-8 sm:my-8">
        <Description
          title={t('form:input-label-avatar')}
          details={t('form:avatar-help-text')}
          className="sm:pe-4 md:pe-5 w-full px-0 pb-5 sm:w-4/12 sm:py-8 md:w-1/3"
        />

        <Card className="w-full sm:w-8/12 md:w-2/3">
          <Button onClick={createAvatar}>Create Avatar</Button>
          {/* <FileInput name="profile.avatar" control={control} multiple={false} /> */}
        </Card>
      </div>

      <div className="my-5 flex flex-wrap border-b border-dashed border-border-base pb-8 sm:my-8">
        <Description
          title={t('form:form-title-information')}
          details={t('form:profile-info-help-text')}
          className="sm:pe-4 md:pe-5 w-full px-0 pb-5 sm:w-4/12 sm:py-8 md:w-1/3"
        />

        <Card className="mb-5 w-full sm:w-8/12 md:w-2/3">
          <Input
            label={t('form:input-label-name')}
            {...register('name')}
            error={t(errors.name?.message!)}
            placeholder={userData?.name}
            // defaultValue={(userData?.name) ? (userData?.name) : ''}
            variant="outline"
            className="mb-5"
          />

          <Input
            label='Email'
            {...register('email')}
            error={t(errors.email?.message!)}
            defaultValue={(userData?.email) ? (userData?.email) : ''}
            variant="outline"
            className="mb-5"
            readOnly={true}
          />
          <Input
            label='Role'
            {...register('role_name')}
            error={t(errors.role_name?.message!)}
            defaultValue={(userData?.role_name) ? (userData?.role_name) : ''}
            variant="outline"
            className="mb-5"
          />


          <Input
            label='Phone'
            {...register('phone')}
            error={t(errors.phone?.message!)}
            defaultValue={(userData?.phone) ? (userData?.phone) : ''}
            variant="outline"
            className="mb-5"
          />
          <Input
            label='DOB'
            {...register('dob')}
            error={t(errors.dob?.message!)}
            defaultValue={(userData?.dob) ? (userData?.dob) : ''}
            variant="outline"
            className="mb-5"
            placeholder='mm/dd/yyyy'
          />
          <Input
            label='Address'
            {...register('address')}
            error={t(errors.address?.message!)}
            defaultValue={(userData?.address) ? (userData?.address) : ''}
            variant="outline"
            className="mb-5"
          />
          <Input
            label='Country'
            {...register('country')}
            error={t(errors.country?.message!)}
            defaultValue={(userData?.country) ? (userData?.country) : ''}
            variant="outline"
            className="mb-5"
          />
          <Input
            label='Country Code'
            {...register('country_code')}
            error={t(errors.country_code?.message!)}
            defaultValue={(userData?.country_code) ? (userData?.country_code) : ''}
            variant="outline"
            className="mb-5"
          />
          <Input
            label='Currency Code'
            {...register('currency_code')}
            error={t(errors.currency_code?.message!)}
            defaultValue={(userData?.currency_code) ? (userData?.currency_code) : ''}
            variant="outline"
            className="mb-5"
          />
          <Input
            label='Post Code'
            {...register('post_code')}
            error={t(errors.post_code?.message!)}
            defaultValue={(userData?.post_code) ? (userData?.post_code) : ''}
            variant="outline"
            className="mb-5"
          />
          <Input
            label='Company Name'
            {...register('company_name')}
            error={t(errors.company_name?.message!)}
            defaultValue={(userData?.company_name) ? (userData?.company_name) : ''}
            variant="outline"
            className="mb-5"
          />

          <Input
            label='Status'
            {...register('status')}
            error={t(errors.status?.message!)}
            defaultValue={(userData?.status) ? (userData?.status) : ''}
            variant="outline"
            className="mb-5"
          />


          <Input
            label='Setting'
            {...register('settings')}
            error={t(errors.settings?.message!)}
            defaultValue={(userData?.settings) ? (userData?.settings) : ''}
            variant="outline"
            className="mb-5"
          />


          {/* <Input
            label='Password'
            {...register('password')}
            placeholder='If you want to update your password, Please enter your new password.'
            error={t(errors.password?.message!)}
            defaultValue={(userData?.password) ? (userData?.password) : ''}
            variant="outline"
            type='password'
            className="mb-5"
          /> */}
          {/* <TextArea
            label={t('form:input-label-bio')}
            {...register('profile.bio')}
            error={t(errors.profile?.bio?.message!)}
            variant="outline"
            className="mb-6"
          /> */}

        </Card>

        <div className="text-end w-full">
          <Button loading={loading} disabled={loading}>
            {t('form:button-label-save')}
          </Button>
        </div>
      </div>
    </form>
  );
}
