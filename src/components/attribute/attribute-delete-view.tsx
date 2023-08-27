import ConfirmationCard from '@/components/common/confirmation-card';
import {
  useModalAction,
  useModalState,
} from '@/components/ui/modal/modal.context';
import { BASE_URL, DELETE_SHOP, DELETE_STORE, SHOP_LIST } from '@/config/endPoints';
import { httpDelete, httpGet } from '@/config/utils';
import { useDeleteAttributeMutation } from '@/data/attributes';
import { Routes } from '@/config/routes';
// import { Router, useRouter } from 'next/router';
import { useRouter } from 'next/router'

const AttributeDeleteView = () => {
  const { mutate: deleteAttributeByID, isLoading: loading } =
    useDeleteAttributeMutation();

    // const roterKey = useRouter
  const { data, keyName } = useModalState();
  const { closeModal } = useModalAction();
  const router = useRouter()
  console.log('**delete', data, '#---#', keyName)

  const getShopss = async () => {
    let shopdata = await httpGet(`${SHOP_LIST}`);
    let result = shopdata?.data?.shops;
    console.log('shopdata----88 ', result)
  }

  const deleteData = async () => {
    let deleteShop = await httpDelete(`${BASE_URL}/${keyName}/${data}/delete`)
    if(deleteShop.status == 200){
      console.log('deleteShop', deleteShop)
      router.reload();
      router.push('/shops')
      // getShopss()
    }
  }
  async function handleDelete() {
    deleteData();
    router.push('/shops')
      getShopss()
    // deleteAttributeByID({
    //   id: data,
    // });
    closeModal();
  }

  // const handleDelete=()=>{
  //   console.log('delete',data)
  // }

  return (
    <ConfirmationCard
      onCancel={closeModal}
      onDelete={handleDelete}
      deleteBtnLoading={loading}
    />
  );
};

export default AttributeDeleteView;
