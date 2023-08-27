import Layout from '@/components/layouts/app';
import ProfileUpdateFrom from '@/components/auth/profile-update-form';
import ChangePasswordForm from '@/components/auth/change-password-from';
import ErrorMessage from '@/components/ui/error-message';
import Loader from '@/components/ui/loader/loader';
import { useMeQuery } from '@/data/user';
import { useTranslation } from 'next-i18next';
import { serverSideTranslations } from 'next-i18next/serverSideTranslations';
import { useEffect, useState } from 'react';
import { httpGet } from '@/config/utils';
import { GET_PROFILE } from '@/config/endPoints';

if (typeof window !== 'undefined') {
  let item = localStorage.getItem('userProfile')

  if (item) {
    var profile = JSON.parse(item)
  }
}

export default function ProfilePage() {
  const { t } = useTranslation();
  const { data, isLoading: loading, error } = useMeQuery();
  if (loading) return <Loader text={t('common:text-loading')} />;
  if (error) return <ErrorMessage message={error.message} />;
  // const [userData, setUserData] = useState(profile ? profile :'')
  let userData = profile ? profile : '';

  const getUserInfo = async () => {
    let response = await httpGet(`${GET_PROFILE}/${userData?.id}`);
    console.log('%%%%%%%%%%%%%%%%%', response.data.users)
    if(response.status == 200){
      // setUserData(response.data.users)
      userData = response?.data?.users; 
    }
  }
  
if (typeof window !== 'undefined') {
  useEffect(() => {
    // let res =  httpGet(`${UPDATE_PROFILE}/${userData?.id}`, data);
    getUserInfo();
  }, []);
}

  return (
    <>
      <div className="flex border-b border-dashed border-border-base py-5 sm:py-8">
        <h1 className="text-lg font-semibold text-heading">
          {t('form:form-title-profile-settings')}
        </h1>
      </div>

      <ProfileUpdateFrom me={userData} />
      {/* <ChangePasswordForm /> */}
    </>
  );
}
ProfilePage.Layout = Layout;

export const getStaticProps = async ({ locale }: any) => ({
  props: {
    ...(await serverSideTranslations(locale, ['form', 'common'])),
  },
});
