import Card from '@/components/common/card';
import Layout from '@/components/layouts/admin';
import ErrorMessage from '@/components/ui/error-message';
import Loader from '@/components/ui/loader/loader';
import { useTranslation } from 'next-i18next';
import { serverSideTranslations } from 'next-i18next/serverSideTranslations';
import ShopList from '@/components/shop/shop-list';
import { useEffect, useState } from 'react';
import Search from '@/components/common/search';
import { adminOnly } from '@/utils/auth-utils';
import { useShopsQuery } from '@/data/shop';
import { SortOrder } from '@/types';
import { httpGet } from '@/config/utils';
import { SHOP_LIST, STORE_LIST } from '@/config/endPoints';
import { errorToaster } from '@/components/Toaster';
import { ERROR_MESSAGE } from '@/config/messages';
import StoreList from '@/components/store/store-list';

export default function AllStorePage() {
  const { t } = useTranslation();
  const [searchTerm, setSearchTerm] = useState('');
  const [page, setPage] = useState(1);
  const [orderBy, setOrder] = useState('created_at');
  const [sortedBy, setColumn] = useState<SortOrder>(SortOrder.Desc);
  const [storeListData, setStoreListData] = useState([]);
  const [storeStatus,setStoreStatus] = useState(false)

  const getStores = async () => {
    let storeData = await httpGet(`${STORE_LIST}`);
    console.log('lllllllllll',storeData)
    if(storeData.status == 200){
      let result = storeData.data.stores;
      setStoreListData(result)
      setStoreStatus(true)
    }
  }

  useEffect(() => {
    getStores()
  }, [])

  function handleSearch({ searchText }: { searchText: string }) {
    setSearchTerm(searchText);
  }

  function handlePagination(current: any) {
    setPage(current);
  }
  return (
    <>
      <Card className="mb-8 flex flex-col items-center justify-between md:flex-row">
        <div className="mb-4 md:mb-0 md:w-1/4">
          <h1 className="text-lg font-semibold text-heading">
            Stores
            {/* {t('common:sidebar-nav-item-shops')} */}
          </h1>
        </div>

      </Card>
      <StoreList
        stores={storeListData}
        storeStatus={storeStatus}
        // getShops={getShops}
      // paginatorInfo={paginatorInfo}
      // onPagination={handlePagination}
      // onOrder={setOrder}
      // onSort={setColumn}
      />
    </>
  );
}
AllStorePage.authenticate = {
  permissions: adminOnly,
};
AllStorePage.Layout = Layout;

export const getStaticProps = async ({ locale }: any) => ({
  props: {
    ...(await serverSideTranslations(locale, ['table', 'common', 'form'])),
  },
});
