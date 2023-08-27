import { useTranslation } from 'next-i18next';
import { Routes } from '@/config/routes';
import { useMutation, useQuery, useQueryClient } from 'react-query';
import { API_ENDPOINTS } from '@/data/client/api-endpoints';
import { toast } from 'react-toastify';
import { shopClient } from './client/shop';
import { mapPaginatorData } from '@/utils/data-mappers';
import { useRouter } from 'next/router';
import { adminOnly, getAuthCredentials, hasAccess } from '@/utils/auth-utils';
import { Shop, ShopPaginator, ShopQueryOptions } from '@/types';
import { SHOP_LIST } from '@/config/endPoints';
import { httpGet } from '@/config/utils';

export const useApproveShopMutation = () => {
  const { t } = useTranslation();
  const queryClient = useQueryClient();
  return useMutation(shopClient.approve, {
    onSuccess: () => {
      toast.success(t('common:successfully-updated'));
    },
    // Always refetch after error or success:
    onSettled: () => {
      queryClient.invalidateQueries(SHOP_LIST);
    },
  });
};

export const useDisApproveShopMutation = () => {
  const { t } = useTranslation();
  const queryClient = useQueryClient();
  return useMutation(shopClient.disapprove, {
    onSuccess: () => {
      toast.success(t('common:successfully-updated'));
    },
    // Always refetch after error or success:
    onSettled: () => {
      queryClient.invalidateQueries(SHOP_LIST);
    },
  });
};

export const useCreateShopMutation = () => {
  const queryClient = useQueryClient();
  const router = useRouter();

  return useMutation(shopClient.create, {
    onSuccess: () => {
      const { permissions } = getAuthCredentials();
      if (hasAccess(adminOnly, permissions)) {
        return router.push(Routes.adminMyShops);
      }
      router.push(Routes.dashboard);
    },
    // Always refetch after error or success:
    onSettled: () => {
      queryClient.invalidateQueries(SHOP_LIST);
    },
  });
};

export const useUpdateShopMutation = () => {
  const { t } = useTranslation();
  const queryClient = useQueryClient();
  return useMutation(shopClient.update, {
    onSuccess: () => {
      toast.success(t('common:successfully-updated'));
    },
    // Always refetch after error or success:
    onSettled: () => {
      queryClient.invalidateQueries(SHOP_LIST);
    },
  });
};

export const useShopQuery = ({ slug }: { slug: string }, options?: any) => {
  return useQuery<Shop, Error>(
    [SHOP_LIST, { slug }],
    () => shopClient.get({ slug }),
    options
  );
};

export const useShopsQuery =async (options: Partial<ShopQueryOptions>) => {
  const { data, error, isLoading } = useQuery<ShopPaginator, Error>(
    [SHOP_LIST, options],
    ({ queryKey, pageParam }) =>
      shopClient.paginated(Object.assign({}, queryKey[1], pageParam)),
    {
      keepPreviousData: true,
    }
  );

  let shopdata = await httpGet(`${SHOP_LIST}`);
  let result = shopdata?.data?.shops;
  console.log('shopdata----88 ',result)

  return {
    shops: result ?? [],
    paginatorInfo: mapPaginatorData(data),
    error,
    loading: isLoading,
  };
};
