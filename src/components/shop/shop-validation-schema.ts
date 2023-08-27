import * as yup from 'yup';

export const shopValidationSchema = yup.object().shape({
  name: yup.string().required('form:error-name-required'),
  email: yup
    .string()
    .email('form:error-email-format')
    .required('form:error-email-required'),
  // password: yup.string().required('form:error-password-required'),
  phone: yup.string().required('Phone is required'),
  // address: yup.string().required('Address is required'),
  companyName: yup.string().required('Company name is required'),
  // country: yup.string().required('Country is required'),
  // post_code: yup.string().required('Post Code is required'),

  
  // name: yup.string().required('form:error-name-required'),
  // balance: yup.object().shape({
  //   payment_info: yup.object().shape({
  //     email: yup
  //       .string()
  //       .typeError('form: error-email-string')
  //       .email('form:error-email-format'),
  //     account: yup
  //       .number()
  //       .transform((value) => (isNaN(value) ? undefined : value)),
  //   }),
  // }),
});
