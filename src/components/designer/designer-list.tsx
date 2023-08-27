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
  designers: Shop[] | undefined;
  paginatorInfo: MappedPaginatorInfo | null;
  onPagination: (current: number) => void;
  onSort: (current: any) => void;
  onOrder: (current: string) => void;
};

const DesignerList = ({
  designers,
  // getShops
  // paginatorInfo,
  // onPagination,
  // onSort,
  // onOrder,
}: IProps) => {
  const { t } = useTranslation();
  const { alignLeft, alignRight } = useIsRTL();

	const [sortingObj, setSortingObj] = useState<{
		sort: SortOrder;
		column: string | null;
	}>({
		sort: SortOrder.Desc,
		column: null,
	});

	const onHeaderClick = (column: string | null) => ({
	
	});



  const columns = [
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
            keyName='store'
            // approveButton={true}
            deleteModalView="DELETE_ATTRIBUTE"
            detailsUrl={Routes.designer.create}
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
          emptyText={t('table:empty-table-data')}
          data={designers}
          rowKey="id"
          scroll={{ x: 800 }}
        />
      </div>

    </>
  );
};

export default DesignerList;
