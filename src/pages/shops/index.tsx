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
import { SHOP_LIST } from '@/config/endPoints';
import { errorToaster } from '@/components/Toaster';
import { ERROR_MESSAGE } from '@/config/messages';

export default function AllShopPage() {
  const { t } = useTranslation();
  const [searchTerm, setSearchTerm] = useState('');
  const [page, setPage] = useState(1);
  const [orderBy, setOrder] = useState('created_at');
  const [sortedBy, setColumn] = useState<SortOrder>(SortOrder.Desc);
  const [shopListData,setShopListData] = useState([])
  const [shopStatus,setShopStatus] = useState(false)
  // const { shops, paginatorInfo, loading, error } = useShopsQuery({
  //   name: searchTerm,
  //   limit: 10,
  //   page,
  //   orderBy,
  //   sortedBy,
  // });

  const getShops=async()=>{
    let shopdata = await httpGet(`${SHOP_LIST}`);
    if(shopdata.status == 200){
      setShopStatus(true)
    }
    if(shopdata?.data){
      let result = shopdata?.data?.shops;
      setShopListData(result)
    }
  }

useEffect(()=>{
 getShops()
},[])
  // if (loading) return <Loader text={t('common:text-loading')} />;
  // if (error) return <ErrorMessage message={error.message} />;

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
            {t('common:sidebar-nav-item-shops')}
          </h1>
        </div>

        {/* <div className="ms-auto flex w-full flex-col items-center md:w-1/2 md:flex-row">
          <Search onSearch={handleSearch} />
        </div> */}
      </Card>
      <ShopList
        shops={shopListData}
        getShops={getShops}
        shopStatus={shopStatus}
        // paginatorInfo={paginatorInfo}
        // onPagination={handlePagination}
        // onOrder={setOrder}
        // onSort={setColumn}
      />
    </>
  );
}
AllShopPage.authenticate = {
  permissions: adminOnly,
};
AllShopPage.Layout = Layout;

export const getStaticProps = async ({ locale }: any) => ({
  props: {
    ...(await serverSideTranslations(locale, ['table', 'common', 'form'])),
  },
});
