import Button from '@/components/ui/button';
import Input from '@/components/ui/input';
import PasswordInput from '@/components/ui/password-input';
import { useTranslation } from 'next-i18next';
import * as yup from 'yup';
import Link from '@/components/ui/link';
import Form from '@/components/ui/forms/form';
import { Routes } from '@/config/routes';
import { useLogin } from '@/data/user';
import type { LoginInput } from '@/types';
import { useEffect, useState } from 'react';
import Alert from '@/components/ui/alert';
import Router, { useRouter } from 'next/router';
import {
  allowedRoles,
  hasAccess,
  setAuthCredentials,
} from '@/utils/auth-utils';
import { httpGet, httpPost } from '@/config/utils';
import { GET_PROFILE, LOGIN } from '@/config/endPoints';

const loginFormSchema = yup.object().shape({
  email: yup
    .string()
    .email('form:error-email-format')
    .required('form:error-email-required'),
  password: yup.string().required('form:error-password-required'),
});

const LoginForm = () => {
  const { t } = useTranslation();
  const [errorMessage, setErrorMessage] = useState<string | null>(null);
  const { mutate: login, isLoading, error } = useLogin();
  const router = useRouter()
  let role = ['super_admin', 'customer'];
  let role2 = ['store_owner'];

  async function onSubmit({ email, password }: LoginInput) {

    const formData = new FormData();
    formData.append("email", email);
    formData.append("password", password);
    let res = await httpPost(`${LOGIN}`, formData);
    console.log('000-----res', res)
    if (res?.status == 200) {

      await getUserInfo(res?.data);
      localStorage.setItem('userProfile', JSON.stringify(res?.data));
      await localStorage.setItem('token', res?.data?.token);
      await localStorage.setItem('data', JSON.stringify(res?.data));
      await localStorage.setItem('userStatus', false);
      await localStorage.removeItem('dataForUpdate')

      if (hasAccess(allowedRoles, role)) {
        setAuthCredentials(res?.data?.token, role);
        Router.push(Routes.dashboard);
        router.reload();
        return;
      }


      // console.log('>>>>>',Routes.dashboard)
      // Router.push('/');
      // return;
    } else {
      console.log('------res.', res.status)
      setErrorMessage('form:error-credential-wrong');
    }

    // login(
    //   {
    //     email,
    //     password,
    //   },
    //   {
    //     onSuccess: (data) => {
    //       if (data?.token) {
    //         if (hasAccess(allowedRoles, data?.permissions)) {
    //           console.log('data?.token, data?.permissions',data?.token, data?.permissions)
    //           setAuthCredentials(data?.token, data?.permissions);
    //           Router.push(Routes.dashboard);
    //           return;
    //         }
    //         setErrorMessage('form:error-enough-permission');
    //       } else {
    //         setErrorMessage('form:error-credential-wrong');
    //       }
    //     },
    //     onError: () => {},
    //   }
    // );
  }

  const getUserInfo = async (data: any) => {
    let response = await httpGet(`${GET_PROFILE}/${data?.id}`);
    console.log('res--', response)
    await localStorage.setItem('userProfile', JSON.stringify(response?.data.users));
  }

  // useEffect(()=>{
  //   if(localStorage.getItem('userStatus') == false){
  //     // router.reload();
  //     router.push(Routes.dashboard);
  //   }
  // },[localStorage.getItem('userStatus')])


  return (
    <>
      <Form<LoginInput> validationSchema={loginFormSchema} onSubmit={onSubmit}>
        {({ register, formState: { errors } }) => (
          <>
            <Input
              label={t('form:input-label-email')}
              {...register('email')}
              type="email"
              variant="outline"
              className="mb-4"
              error={t(errors?.email?.message!)}
            />
            <PasswordInput
              label={t('form:input-label-password')}
              forgotPassHelpText={t('form:input-forgot-password-label')}
              {...register('password')}
              error={t(errors?.password?.message!)}
              variant="outline"
              className="mb-4"
              forgotPageLink={Routes.forgotPassword}
            />
            <Button className="w-full button-color" loading={isLoading} disabled={isLoading}>
              {t('form:button-label-login')}
            </Button>

            <div className="relative mt-8 mb-6 flex flex-col items-center justify-center text-sm text-heading sm:mt-11 sm:mb-8">
              <hr className="w-full" />
              <span className="absolute -top-2.5 bg-light px-2 -ms-4 start-2/4">
                {t('common:text-or')}
              </span>
            </div>

            <div className="text-center text-sm text-body sm:text-base">
              {t('form:text-no-account')}{' '}
              <Link
                href={Routes.register}
                className="font-semibold text-accent underline transition-colors duration-200 ms-1 hover:text-accent-hover hover:no-underline focus:text-accent-700 focus:no-underline focus:outline-none"
              >
                Register a new account
              </Link>
            </div>
          </>
        )}
      </Form>
      {errorMessage ? (
        <Alert
          message={t(errorMessage)}
          variant="error"
          closeable={true}
          className="mt-5"
          onClose={() => setErrorMessage(null)}
        />
      ) : null}
    </>
  );
};

export default LoginForm;

{
  /* {errorMsg ? (
          <Alert
            message={t(errorMsg)}
            variant="error"
            closeable={true}
            className="mt-5"
            onClose={() => setErrorMsg('')}
          />
        ) : null} */
}
