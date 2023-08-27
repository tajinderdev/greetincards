import { useState } from 'react';
import Pagination from '@/components/ui/pagination';
import Image from 'next/image';
import { Table } from '@/components/ui/table';
import ActionButtons from '@/components/common/action-buttons';
import { siteSettings } from '@/settings/site.settings';
import { useTranslation } from 'next-i18next';
import { useIsRTL } from '@/utils/locals';
import Badge from '@/components/ui/badge/badge';
import { ShopPaginator, SortOrder } from '@/types';
import TitleWithSort from '@/components/ui/title-with-sort';
import Link from '@/components/ui/link';
import { Shop, MappedPaginatorInfo } from '@/types';
import { Form, Button, Modal, Col, Row } from "react-bootstrap";
import { Routes } from '@/config/routes';

type IProps = {
  shops: Shop[] | undefined;
  getShops: undefined;
  shopStatus: undefined;
  paginatorInfo: MappedPaginatorInfo | null;
  onPagination: (current: number) => void;
  onSort: (current: any) => void;
  onOrder: (current: string) => void;
};

const ShopList = ({
  shops,
  getShops,
  shopStatus
  // paginatorInfo,
  // onPagination,
  // onSort,
  // onOrder,
}: IProps) => {
  const { t } = useTranslation();
  const { alignLeft, alignRight } = useIsRTL();
  const [showDel, setDelShow] = useState(false);
  const [shopId,setShopId] = useState();

    /**
   * Delete Modal Close Fun
   */
    const DelClose = () => setDelShow(false);


    
  /**
   * Show delete Modal
   */
  const DelShow = (id) => {
    setShopId(id);
    setDelShow(true);
  };


  const key="shopDelete";

  console.log('shop-----33',shops)

	const [sortingObj, setSortingObj] = useState<{
		sort: SortOrder;
		column: string | null;
	}>({
		sort: SortOrder.Desc,
		column: null,
	});

	const onHeaderClick = (column: string | null) => ({
		// onClick: () => {
		// 	onSort((currentSortDirection: SortOrder) =>
		// 		currentSortDirection === SortOrder.Desc ? SortOrder.Asc : SortOrder.Desc
		// 	);
		// 	onOrder(column!);

		// 	setSortingObj({
		// 		sort:
		// 			sortingObj.sort === SortOrder.Desc ? SortOrder.Asc : SortOrder.Desc,
		// 		column: column,
		// 	});
		// },
	});

  const updateShops=(value:any)=>{
    console.log('kkkkkkkkkkkkk',value)
  }

  const columns = [
    // {
    //   title: t('table:table-item-logo'),
    //   dataIndex: 'logo',
    //   key: 'logo',
    //   align: 'center',
    //   width: 74,
    //   render: (logo: any, record: any) => (
    //     <Image
    //       src={logo?.thumbnail ?? siteSettings.product.placeholder}
    //       alt={record?.name}
    //       layout="fixed"
    //       width={42}
    //       height={42}
    //       className="overflow-hidden rounded"
    //     />
    //   ),
    // },
    {
      title: (
        <TitleWithSort
          title={t('table:table-item-title')}
          ascending={
            sortingObj.sort === SortOrder.Asc && sortingObj.column === 'name'
          }
          isActive={sortingObj.column === 'name'}
        />
      ),
      className: 'cursor-pointer',
      dataIndex: 'name',
      key: 'name',
      align: alignLeft,
      onHeaderCell: () => onHeaderClick('name'),
      render: (name: any, { slug }: any) => (
        <Link href={`/${slug}`}>
          <span className="whitespace-nowrap">{name}</span>
        </Link>
      ),
    },
    {
      title: t('table:table-item-company-name'),
      dataIndex: 'company_name',
      key: 'company_name',
      align: 'center',
      render: (company_name: any) => company_name,
    },
    {
      title: t('table:table-item-email'),
      dataIndex: 'email',
      key: 'email',
      align: 'center',
      render: (email: any) => email,
    },
    {
      title: t('table:table-item-phone'),
      dataIndex: 'phone',
      key: 'phone',
      align: 'center',
      render: (phone: any) => phone,
    },
    {
      title: t('table:table-item-country'),
      dataIndex: 'country',
      key: 'country',
      align: 'center',
      render: (country: any) => country,
    },
    {
      title: t('table:table-item-post-code'),
      dataIndex: 'post_code',
      key: 'post_code',
      align: 'center',
      render: (post_code: any) => post_code,
    },
    {
      title: t('table:table-item-address'),
      dataIndex: 'address',
      key: 'address',
      align: 'center',
      render: (address: any) => address,
    },

    // {
    //   title: (
    //     <TitleWithSort
    //       title={t('table:table-item-total-products')}
    //       ascending={
    //         sortingObj.sort === SortOrder.Asc &&
    //         sortingObj.column === 'products_count'
    //       }
    //       isActive={sortingObj.column === 'products_count'}
    //     />
    //   ),
    //   className: 'cursor-pointer',
    //   dataIndex: 'products_count',
    //   key: 'products_count',
    //   align: 'center',
    //   onHeaderCell: () => onHeaderClick('products_count'),
    // },
    // {
    //   title: (
    //     <TitleWithSort
    //       title={t('table:table-item-total-orders')}
    //       ascending={
    //         sortingObj.sort === SortOrder.Asc &&
    //         sortingObj.column === 'orders_count'
    //       }
    //       isActive={sortingObj.column === 'orders_count'}
    //     />
    //   ),
    //   className: 'cursor-pointer',
    //   dataIndex: 'orders_count',
    //   key: 'orders_count',
    //   align: 'center',
    //   onHeaderCell: () => onHeaderClick('orders_count'),
    // },
    // {
    //   title: (
    //     <TitleWithSort
    //       title={t('table:table-item-status')}
    //       ascending={
    //         sortingObj.sort === SortOrder.Asc &&
    //         sortingObj.column === 'is_active'
    //       }
    //       isActive={sortingObj.column === 'is_active'}
    //     />
    //   ),
    //   className: 'cursor-pointer',
    //   dataIndex: 'is_active',
    //   key: 'is_active',
    //   align: 'center',
    //   onHeaderCell: () => onHeaderClick('is_active'),
    //   render: (is_active: boolean) => (
    //     <Badge
    //       textKey={is_active ? 'common:text-active' : 'common:text-inactive'}
    //       color={is_active ? 'bg-accent' : 'bg-red-500'}
    //     />
    //   ),
    // },
    {
      title: t('table:table-item-actions'),
      dataIndex: 'id',
      key: 'actions',
      align: alignRight,
      render: (id: string,data:string, { slug, is_active }: any) => {
        return (
          <ActionButtons
            id={id}
            data={data}
            keyName='shops'
            // approveButton={true}
            deleteModalView="DELETE_ATTRIBUTE"
            detailsUrl={Routes.shop.create}
            // detailsUrl={`/${slug}`}
            isShopActive={is_active}
          />
        );
      },
    },
  ];

  return (
    <>
      <div className="mb-6 overflow-hidden rounded shadow">
        <Table
          //@ts-ignore
          columns={columns}
          emptyText={shopStatus ? t('table:empty-table-data') : ('Loading...')}
          data={shops}
          rowKey="id"
          scroll={{ x: 800 }}
        />
      </div>



      {/* {!!paginatorInfo?.total && (
        <div className="flex items-center justify-end">
          <Pagination
            total={paginatorInfo.total}
            current={paginatorInfo.currentPage}
            pageSize={paginatorInfo.perPage}
            onChange={onPagination}
          />
        </div>
      )} */}
    </>
  );
};

export default ShopList;
