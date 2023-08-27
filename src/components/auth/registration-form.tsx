import Alert from '@/components/ui/alert';
import Button from '@/components/ui/button';
import Input from '@/components/ui/input';
import PasswordInput from '@/components/ui/password-input';
import { useRouter } from 'next/router';
import { useState } from 'react';
import { useForm } from 'react-hook-form';
import { Routes } from '@/config/routes';
import { useTranslation } from 'next-i18next';
import { yupResolver } from '@hookform/resolvers/yup';
import * as yup from 'yup';
import Link from '@/components/ui/link';
import {
  allowedRoles,
  hasAccess,
  setAuthCredentials,
} from '@/utils/auth-utils';
import { Permission } from '@/types';
import { useRegisterMutation } from '@/data/user';
import { httpPost } from '@/config/utils';
import { SIGN_UP } from '@/config/endPoints';
import { Dropdown, Row } from 'react-bootstrap';
import { ArrowDown } from '../icons/arrow-down';
import { successToaster } from '../Toaster';

type FormValues = {
  name: string;
  email: string;
  password: string;
  permission: Permission;
  userRole: string
};
const registrationFormSchema = yup.object().shape({
  name: yup.string().required('form:error-name-required'),
  email: yup
    .string()
    .email('form:error-email-format')
    .required('form:error-email-required'),
  password: yup.string().required('form:error-password-required'),
  userRole: yup.string().required('Role is required'),
  permission: yup.string().default('store_owner').oneOf(['store_owner']),
});
const RegistrationForm = () => {
  const [errorMessage, setErrorMessage] = useState<string | null>(null);
  const { mutate: registerUser, isLoading: loading } = useRegisterMutation();
  let role = ['super_admin', 'customer'];

  const {
    register,
    handleSubmit,
    formState: { errors },
    setError,
  } = useForm<FormValues>({
    resolver: yupResolver(registrationFormSchema),
    defaultValues: {
      permission: Permission.StoreOwner,
    },
  });
  const router = useRouter();
  const { t } = useTranslation();

  const [isOpen, setIsOpen] = useState(false);

  const toggleDropdown = () => {
    setIsOpen((prevIsOpen) => !prevIsOpen);
  };

  async function onSubmit({ name, email, password, permission, userRole }: FormValues) {
    console.log('userRole', userRole)
    const formData = new FormData();
    formData.append("name", name);
    formData.append("email", email);
    formData.append("password", password);
    formData.append("role", userRole);

    let res = await httpPost(`${SIGN_UP}`, formData);
    console.log('res0000000', res)
    if (res.status == 200) {
      successToaster('Successfully registered');
      // localStorage.setItem('data', JSON.stringify(res?.data?.user))
      // await localStorage.setItem('userStatus', false);
      // if (hasAccess(allowedRoles, role)) {
      //   setAuthCredentials(res?.data?.token, role);
      //   router.push(Routes.login);
      //   return;
      // }

      router.push(Routes.login);

      return
    } else {
      console.log('3333')
      setErrorMessage('form:error-credential-wrong');
    }

    // let register =
    //   registerUser(
    //     {
    //       name,
    //       email,
    //       password,
    //       permission,
    //     },

    //     {
    //       onSuccess: (data) => {
    //         console.log('-----------data', data)
    //         // if (data?.token) {
    //         //   if (hasAccess(allowedRoles, data?.permissions)) {
    //         //     setAuthCredentials(data?.token, data?.permissions);
    //         //     router.push(Routes.dashboard);
    //         //     return;
    //         //   }
    //         //   setErrorMessage('form:error-enough-permission');
    //         // } else {
    //         //   setErrorMessage('form:error-credential-wrong');
    //         // }
    //       },
    //       onError: (error: any) => {
    //         Object.keys(error?.response?.data).forEach((field: any) => {
    //           setError(field, {
    //             type: 'manual',
    //             message: error?.response?.data[field],
    //           });
    //         });
    //       },
    //     }
    //   );
  }



  const handleToggle = () => {
    setIsOpen(!isOpen);
  };

  const handleOptionSelect = (option: any) => {
    console.log('Selected option:', option);
    // Add your functionality here based on the selected option
    // For example, you could call a function to perform some action
  };
  const options = ['Option 1', 'Option 2', 'Option 3'];

  return (
    <>
      <form onSubmit={handleSubmit(onSubmit)} noValidate>
        {/* <Input
          label={t('form:input-label-name')}
          {...register('name')}
          variant="outline"
          className="mb-4"
          error={t(errors?.name?.message!)}
        /> */}
     
         <Input
          label='First Name'
          {...register('name')}
          variant="outline"
          className="mb-4"
          error={t(errors?.name?.message!)}
        />
        <Input
          label='Last Name'
          {...register('name')}
          variant="outline"
          className="mb-4"
          error={t(errors?.name?.message!)}
        />
        <Input
          label={t('form:input-label-email')}
          {...register('email')}
          type="email"
          variant="outline"
          className="mb-4"
          error={t(errors?.email?.message!)}
        />
        {/* <label className="block mb-3 text-sm font-semibold leading-none text-body-dark">Role</label>
        <div className="px-4 h-12 flex items-center w-full rounded appearance-none transition duration-300 ease-in-out text-heading text-sm focus:outline-none focus:ring-0 border border-border-base focus:border-accent h-12 mb-4 ">
          <button onClick={toggleDropdown} className="dropdown-button"> Select Role
      </button>
      {isOpen && (
        <div className="dropdown-content">
          <a href="#">Option 1</a>
          <a href="#">Option 2</a>
          <a href="#">Option 3</a>
        </div>
      )} */}

          {/* <div className=''>
      <div className='dropdown-button' onClick={handleToggle}>
        Select an option
      </div>
      {isOpen && (
        <ul className='dropdown-menu'>
          {options.map((option) => (
            <li key={option} onClick={() => handleOptionSelect(option)}>
              {option}
            </li>
          ))}
        </ul>
      )}
    </div> */}

        {/* </div> */}


        <Input
          label={t('form:input-label-role')}
          {...register('userRole')}
          type="userRole"
          variant="outline"
          className="mb-4"
          placeholder='Enter Role (Shop Store Designer)'
          error={t(errors?.userRole?.message!)}
        />
        
        <PasswordInput
          label={t('form:input-label-password')}
          {...register('password')}
          error={t(errors?.password?.message!)}
          variant="outline"
          className="mb-4"
        />
        <Button className="w-full button-color" loading={loading} disabled={loading}>
          {t('form:text-register')}
        </Button>

        {errorMessage ? (
          <Alert
            message={t(errorMessage)}
            variant="error"
            closeable={true}
            className="mt-5"
            onClose={() => setErrorMessage(null)}
          />
        ) : null}
      </form>
      <div className="relative mt-8 mb-6 flex flex-col items-center justify-center text-sm text-heading sm:mt-11 sm:mb-8">
        <hr className="w-full" />
        <span className="start-2/4 -ms-4 absolute -top-2.5 bg-light px-2">
          {t('common:text-or')}
        </span>
      </div>
      <div className="text-center text-sm text-body sm:text-base">
        {t('form:text-already-account')}{' '}
        <Link
          href={Routes.login}
          className="ms-1 font-semibold text-accent underline transition-colors duration-200 hover:text-accent-hover hover:no-underline focus:text-accent-700 focus:no-underline focus:outline-none"
        >
          {t('form:button-label-login')}
        </Link>
      </div>
    </>
  );
};

export default RegistrationForm;
