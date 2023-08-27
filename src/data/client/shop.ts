import {
  QueryOptions,
  Shop,
  ShopInput,
  ShopPaginator,
  ShopQueryOptions,
} from '@/types';
import { ApproveShopInput } from '@/types';
import { API_ENDPOINTS } from './api-endpoints';
import { HttpClient } from './http-client';
import { crudFactory } from './curd-factory';
import { SHOP_LIST } from '@/config/endPoints';

export const shopClient = {
  ...crudFactory<Shop, QueryOptions, ShopInput>(SHOP_LIST),
  get({ slug }: { slug: String }) {
    return HttpClient.get<Shop>(`${SHOP_LIST}`);
  },
  paginated: ({ name, ...params }: Partial<ShopQueryOptions>) => {
    return HttpClient.get<ShopPaginator>(SHOP_LIST, {
      searchJoin: 'and',
      ...params,
      search: HttpClient.formatSearchParams({ name }),
    });
  },
  approve: (variables: ApproveShopInput) => {
    return HttpClient.post<any>(API_ENDPOINTS.APPROVE_SHOP, variables);
  },
  disapprove: (variables: { id: string }) => {
    return HttpClient.post<{ id: string }>(
      API_ENDPOINTS.DISAPPROVE_SHOP,
      variables
    );
  },
};
