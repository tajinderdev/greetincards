import OwnerLayout from '@/components/layouts/owner';
import ShopForm from '@/components/shop/shop-form';
import StoreForm from '@/components/store/store-form';
import { adminAndOwnerOnly } from '@/utils/auth-utils';
import { GetStaticProps } from 'next';
import { useTranslation } from 'next-i18next';
import { serverSideTranslations } from 'next-i18next/serverSideTranslations';

export default function CreateDesignerPage() {
  const { t } = useTranslation();
  return (
    <>
      <div className="flex border-b border-dashed border-border-base py-5 sm:py-8">
        <h1 className="text-lg font-semibold text-heading">
          Create Designer
        </h1>
      </div>
      <StoreForm />
    </>
  );
}
CreateDesignerPage.authenticate = {
  permissions: adminAndOwnerOnly,
};
CreateDesignerPage.Layout = OwnerLayout;

export const getStaticProps: GetStaticProps = async ({ locale }) => ({
  props: {
    ...(await serverSideTranslations(locale!, ['common', 'form'])),
  },
});
