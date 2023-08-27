import * as yup from 'yup';

export const storeValidationSchema = yup.object().shape({
  name: yup.string().required('form:error-name-required'),
  email: yup
    .string()
    .email('form:error-email-format')
    .required('form:error-email-required'),
  phone: yup.string().required('Phone is required'),
  companyName: yup.string().required('Company name is required'),
});
