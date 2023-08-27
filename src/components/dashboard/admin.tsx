import { CartIconBig } from '@/components/icons/cart-icon-bag';
import { CoinIcon } from '@/components/icons/coin-icon';
import ColumnChart from '@/components/widgets/column-chart';
import StickerCard from '@/components/widgets/sticker-card';
import ErrorMessage from '@/components/ui/error-message';
import usePrice from '@/utils/use-price';
import Loader from '@/components/ui/loader/loader';
import RecentOrders from '@/components/order/recent-orders';
import PopularProductList from '@/components/product/popular-product-list';
import { useOrdersQuery } from '@/data/order';
import { useTranslation } from 'next-i18next';
import { useWithdrawsQuery } from '@/data/withdraw';
import WithdrawTable from '@/components/withdraw/withdraw-table';
import { ShopIcon } from '@/components/icons/sidebar';
import { DollarIcon } from '@/components/icons/shops/dollar';
import { useAnalyticsQuery, usePopularProductsQuery } from '@/data/dashboard';
import { useRouter } from 'next/router';
import { useEffect, useState } from 'react';
import { httpGet } from '@/config/utils';
import { DESIGNER_LIST, PRODUCT_LIST, SHOP_LIST, STORE_LIST } from '@/config/endPoints';

export default function Dashboard() {
  let userRole = 'super_admin';
  const [shopList, setShopList] = useState();
  const [shopCount,setShopCount] = useState();
  const [storeCount,setStoreCount] = useState();
  const [designerpCount,setDesignerCount] = useState();
  const [productList, setProductList] = useState();
  const [designerList, setDesignerList] = useState();
  const [userStatue,setUserStatus] = useState(localStorage.getItem('userStatus'))
  const router = useRouter()
  console.log('--',localStorage.getItem('userStatus'))

  useEffect(()=>{
    if(localStorage.getItem('userStatus') == false){
      localStorage.setItem('userStatus',true)
      // router.reload();
      router.push(Routes.dashboard);
    }
  },[localStorage.getItem('userStatus')])

  // const getShopList = async () => {
  //   let shopdata = await httpGet(`${SHOP_LIST}`);
  //   let result = shopdata?.data?.shops;
  //   setShopList(result)
  //   console.log('shopdata----88 ', result)
  // }
  // console.log('---shopList', shopList)


  // const getProductList = async () => {
  //   let productData = await httpGet(`${PRODUCT_LIST}`);
  //   let result = productData?.data?.shops;
  //   setProductList(result)
  //   console.log('PRODUCTDATA----88 ', result)
  // }


  // useEffect(() => {
  //   getShopList();
  //   getProductList()
  // }, [])




  const { t } = useTranslation();
  const { locale } = useRouter();
  const { data, isLoading: loading } = useAnalyticsQuery();
  const { price: total_revenue } = usePrice(
    data && {
      amount: data?.totalRevenue!,
    }
  );
  const { price: todays_revenue } = usePrice(
    data && {
      amount: data?.todaysRevenue!,
    }
  );
  const {
    error: orderError,
    orders: orderData,
    loading: orderLoading,
    paginatorInfo,
  } = useOrdersQuery({
    language: locale,
    limit: 10,
    page: 1,
  });
  const {
    data: popularProductData,
    isLoading: popularProductLoading,
    error: popularProductError,
  } = usePopularProductsQuery({ limit: 10, language: locale });

  const { withdraws, loading: withdrawLoading } = useWithdrawsQuery({
    limit: 10,
  });

  if (loading || orderLoading || popularProductLoading || withdrawLoading) {
    return <Loader text={t('common:text-loading')} />;
  }
  if (orderError || popularProductError) {
    return (
      <ErrorMessage
        message={orderError?.message || popularProductError?.message}
      />
    );
  }
  let salesByYear: number[] = Array.from({ length: 12 }, (_) => 0);
  if (!!data?.totalYearSaleByMonth?.length) {
    salesByYear = data.totalYearSaleByMonth.map((item: any) =>
      item.total.toFixed(2)
    );
  }


  let roleName;
  if (typeof window !== 'undefined') {
    // Perform localStorage action
    let item = localStorage.getItem('data')

    if (item) {
      let data = JSON.parse(item)
      roleName = data?.role_name
      console.log('data', roleName)
    }
  }

  // const [shopStatus,setShopStatus] = useState(false);

  // const getShop=async()=>{
  //   let shopData = await httpGet(`${SHOP_LIST}`);
  //   if(shopData?.status == 200){
  //     setShopCount(shopData.data.shops.length)
  //   }
  // }

  // const getStore=async()=>{
  //   let storeData = await httpGet(`${STORE_LIST}`);
  //   if(storeData?.status == 200){
  //     setStoreCount(storeData.data.stores.length)
  //   }
  // }

  // const getDesigner=async()=>{
  //   let designerData = await httpGet(`${DESIGNER_LIST}`);
  //   if(designerData?.status == 200){
  //     setDesignerCount(designerData.data.stores.length)
  //   }
  // }

  // let status = false;
  // if(status == false){
  // useEffect(()=>{
  //     getShop()
  //     getStore()
  //     getDesigner()
  //     // setShopStatus(true)
  //     status =true;    
  //   },[])
  // }


  return (
    <>
      {(userRole == 'super_admin') ? (
        <>
          <div className="mb-6 grid w-full grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4">
            <div className="w-full ">
              <StickerCard
                titleTransKey="sticker-card-title-rev"
                subtitleTransKey="sticker-card-subtitle-rev"
                icon={<DollarIcon className="h-7 w-7" color="#047857" />}
                iconBgStyle={{ backgroundColor: '#A7F3D0' }}
                price={total_revenue}
              />
            </div>
            <div className="w-full ">
              <StickerCard
                titleTransKey="sticker-card-title-order"
                subtitleTransKey="sticker-card-subtitle-order"
                icon={<CartIconBig />}
                price={data?.totalOrders}
              />
            </div>
            <div className="w-full ">
              <StickerCard
                titleTransKey="sticker-card-title-today-rev"
                icon={<CoinIcon />}
                price={todays_revenue}
              />
            </div>

            {
              (roleName == 'Designer') ? (
                <div className="w-full ">
                  <StickerCard
                    titleTransKey="Total Designer"
                    icon={<ShopIcon className="w-6" color="#1D4ED8" />}
                    iconBgStyle={{ backgroundColor: '#93C5FD' }}
                    price={designerpCount}
                  />
                </div>
              ) : (roleName == 'Customer') ? (
                <div className="w-full ">
                  <StickerCard
                    titleTransKey="Total Customer"
                    icon={<ShopIcon className="w-6" color="#1D4ED8" />}
                    iconBgStyle={{ backgroundColor: '#93C5FD' }}
                    price={0}
                  />
                </div>
              ) : (roleName == 'Store') ? (
                <>
                <div className="w-full ">
                <StickerCard
                  titleTransKey="sticker-card-title-total-shops"
                  icon={<ShopIcon className="w-6" color="#1D4ED8" />}
                  iconBgStyle={{ backgroundColor: '#93C5FD' }}
                  price={shopCount}
                />
              </div>
               <div className="w-full ">
               <StickerCard
                 titleTransKey="Total Store"
                 icon={<ShopIcon className="w-6" color="#1D4ED8" />}
                 iconBgStyle={{ backgroundColor: '#93C5FD' }}
                 price={storeCount}
               />
             </div>
                </>
              ) : (roleName == 'Shop') ? (
                <>
                <div className="w-full ">
                <StickerCard
                  titleTransKey="sticker-card-title-total-shops"
                  icon={<ShopIcon className="w-6" color="#1D4ED8" />}
                  iconBgStyle={{ backgroundColor: '#93C5FD' }}
                  price={shopCount}
                />
              </div>
               <div className="w-full ">
               <StickerCard
                 titleTransKey="Total Store"
                 icon={<ShopIcon className="w-6" color="#1D4ED8" />}
                 iconBgStyle={{ backgroundColor: '#93C5FD' }}
                 price={storeCount}
               />
             </div>
                </>
              ) :
                ''
            }
            {/* <div className="w-full ">
              <StickerCard
                titleTransKey="sticker-card-title-total-shops"
                // titleTransKey={roleName == 'Designers' ? 'Total Designers' : (roleName == 'Customer' ? 'Total Customers' : '')}
                icon={<ShopIcon className="w-6" color="#1D4ED8" />}
                iconBgStyle={{ backgroundColor: '#93C5FD' }}
                price={0}
              />
            </div> */}

          </div>
          {/* <div className="mb-6 flex w-full flex-wrap md:flex-nowrap">
       <ColumnChart
         widgetTitle={t('common:sale-history')}
         colors={['#03D3B5']}
         series={salesByYear}
         categories={[
           t('common:january'),
           t('common:february'),
           t('common:march'),
           t('common:april'),
           t('common:may'),
           t('common:june'),
           t('common:july'),
           t('common:august'),
           t('common:september'),
           t('common:october'),
           t('common:november'),
           t('common:december'),
         ]}
       />
     </div> */}
          {/* <div className="mb-6 flex w-full flex-wrap space-y-6 rtl:space-x-reverse xl:flex-nowrap xl:space-y-0 xl:space-x-5">
            <div className="w-full xl:w-1/2">
              <RecentOrders
                orders={orderData}
                title={t('table:recent-order-table-title')}
              />
            </div>

            <div className="w-full xl:w-1/2">
              <WithdrawTable
                withdraws={withdraws}
                title={t('table:withdraw-table-title')}
              />
            </div>
          </div> */}
          <div className="mb-6 w-full xl:mb-0">
            <PopularProductList
              products={productList}
              title={t('table:popular-products-table-title')}
            />
          </div>
        </>
      )
        :
        (userRole == 'Shop') ?
          (
            <>
              <div className="mb-6 grid w-full grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4">
                <div className="w-full ">
                  <StickerCard
                    titleTransKey="sticker-card-title-rev"
                    subtitleTransKey="sticker-card-subtitle-rev"
                    icon={<DollarIcon className="h-7 w-7" color="#047857" />}
                    iconBgStyle={{ backgroundColor: '#A7F3D0' }}
                    price={total_revenue}
                  />
                </div>
                <div className="w-full ">
                  <StickerCard
                    titleTransKey="sticker-card-title-order"
                    subtitleTransKey="sticker-card-subtitle-order"
                    icon={<CartIconBig />}
                    price={data?.totalOrders}
                  />
                </div>
                <div className="w-full ">
                  <StickerCard
                    titleTransKey="sticker-card-title-today-rev"
                    icon={<CoinIcon />}
                    price={todays_revenue}
                  />
                </div>
                <div className="w-full ">
                  <StickerCard
                    titleTransKey="sticker-card-title-total-shops"
                    icon={<ShopIcon className="w-6" color="#1D4ED8" />}
                    iconBgStyle={{ backgroundColor: '#93C5FD' }}
                    price={data?.totalShops}
                  />
                </div>
              </div>

              <div className="mb-6 flex w-full flex-wrap space-y-6 rtl:space-x-reverse xl:flex-nowrap xl:space-y-0 xl:space-x-5">
                <div className="w-full xl:w-1/2">
                  <RecentOrders
                    orders={orderData}
                    title={t('table:recent-order-table-title')}
                  />
                </div>

                <div className="w-full xl:w-1/2">
                  <WithdrawTable
                    withdraws={withdraws}
                    title={t('table:withdraw-table-title')}
                  />
                </div>
              </div>
              <div className="mb-6 w-full xl:mb-0">
                <PopularProductList
                  products={productList}
                  title={t('table:popular-products-table-title')}
                />
              </div>
            </>
          )
          : (userRole == 'Store') ? (
            <>
              <div className="mb-6 grid w-full grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4">
                <div className="w-full ">
                  <StickerCard
                    titleTransKey="sticker-card-title-rev"
                    subtitleTransKey="sticker-card-subtitle-rev"
                    icon={<DollarIcon className="h-7 w-7" color="#047857" />}
                    iconBgStyle={{ backgroundColor: '#A7F3D0' }}
                    price={total_revenue}
                  />
                </div>
                <div className="w-full ">
                  <StickerCard
                    titleTransKey="sticker-card-title-order"
                    subtitleTransKey="sticker-card-subtitle-order"
                    icon={<CartIconBig />}
                    price={data?.totalOrders}
                  />
                </div>
                <div className="w-full ">
                  <StickerCard
                    titleTransKey="sticker-card-title-today-rev"
                    icon={<CoinIcon />}
                    price={todays_revenue}
                  />
                </div>
                <div className="w-full ">
                  <StickerCard
                    titleTransKey="sticker-card-title-total-stores"
                    icon={<ShopIcon className="w-6" color="#1D4ED8" />}
                    iconBgStyle={{ backgroundColor: '#93C5FD' }}
                    price={data?.totalShops}
                  />
                </div>
              </div>

              <div className="mb-6 flex w-full flex-wrap space-y-6 rtl:space-x-reverse xl:flex-nowrap xl:space-y-0 xl:space-x-5">
                <div className="w-full xl:w-1/2">
                  <RecentOrders
                    orders={orderData}
                    title={t('table:recent-order-table-title')}
                  />
                </div>

                <div className="w-full xl:w-1/2">
                  <WithdrawTable
                    withdraws={withdraws}
                    title={t('table:withdraw-table-title')}
                  />
                </div>
              </div>
              <div className="mb-6 w-full xl:mb-0">

                <PopularProductList
                  // products={popularProductData}
                  products={productList}
                  title={t('table:popular-products-table-title')}
                />
              </div>
            </>
          ) : 'No Record'}

    </>
  );
}
