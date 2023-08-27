import { adminAndOwnerOnly, adminOwnerAndStaffOnly } from '@/utils/auth-utils';
import { Routes } from '@/config/routes';

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

let arr = [
  {
    href: Routes.dashboard,
    label: 'sidebar-nav-item-dashboard',
    icon: 'DashboardIcon',
  },
  {
    href: Routes.shop.list,
    label: 'sidebar-nav-item-shops',
    icon: 'ShopIcon',
  },
  {
    href: Routes.store.list,
    label: 'Stores',
    icon: 'ShopIcon',
  },
  // {
  //   href: 'demo',
  //   label: 'demo',
  //   icon: 'ShopIcon',
  // },
  // {
  //   href: Routes.adminMyShops,
  //   label: 'sidebar-nav-item-my-shops',
  //   icon: 'MyShopIcon',
  // },
  // {
  //   href: Routes.product.list,
  //   label: 'sidebar-nav-item-products',
  //   icon: 'ProductsIcon',
  // },
  // {
  //   href: Routes.type.list,
  //   label: 'sidebar-nav-item-groups',
  //   icon: 'TypesIcon',
  // },
  // {
  //   href: Routes.category.list,
  //   label: 'sidebar-nav-item-categories',
  //   icon: 'CategoriesIcon',
  // },
  // {
  //   href: Routes.tag.list,
  //   label: 'sidebar-nav-item-tags',
  //   icon: 'TagIcon',
  // },
  // {
  //   href: Routes.order.list,
  //   label: 'sidebar-nav-item-orders',
  //   icon: 'OrdersIcon',
  // },
  // {
  //   href: Routes.orderStatus.list,
  //   label: 'sidebar-nav-item-order-status',
  //   icon: 'OrdersStatusIcon',
  // },
  // {
  //   href: Routes.order.create,
  //   label: 'sidebar-nav-item-create-order',
  //   icon: 'CalendarScheduleIcon',
  // },
  // {
  //   href: Routes.user.list,
  //   label: 'sidebar-nav-item-users',
  //   icon: 'UsersIcon',
  // },
  // {
  //   href: Routes.tax.list,
  //   label: 'sidebar-nav-item-taxes',
  //   icon: 'TaxesIcon', 
  // },
  // {
  //   href: Routes.withdraw.list,
  //   label: 'sidebar-nav-item-withdraws',
  //   icon: 'WithdrawIcon',
  // },
  // {
  //   href: Routes.question.list,
  //   label: 'sidebar-nav-item-questions',
  //   icon: 'QuestionIcon',
  // },
  // {
  //   href: Routes.reviews.list,
  //   label: 'sidebar-nav-item-reviews',
  //   icon: 'ReviewIcon',
  // },
  // {
  //   href: Routes.settings,
  //   label: 'sidebar-nav-item-settings',
  //   icon: 'SettingsIcon',
  // },
];

let Designers = [
  {
    href: Routes.dashboard,
    label: 'sidebar-nav-item-dashboard',
    icon: 'DashboardIcon',
  },
  {
    href: Routes.product.list,
    label: 'sidebar-nav-item-products',
    icon: 'ProductsIcon',
  },
  {
    href: 'demo',
    label: 'Avatars ',
    icon: 'DashboardIcon',
  },
  {
    href: Routes.withdraw.list,
    label: 'Invoice',
    icon: 'WithdrawIcon',
  },
];

let arr3 = [
  {
    href: Routes.dashboard,
    label: 'sidebar-nav-item-dashboard',
    icon: 'DashboardIcon',
  }
];

let Shop = [
  {
    href: Routes.dashboard,
    label: 'sidebar-nav-item-dashboard',
    icon: 'DashboardIcon',
  },
  {
    href: Routes.shop.create,
    label: 'Shop',
    icon: 'ShopIcon',
  },
  {
    href: Routes.store.create,
    label: 'Store',
    icon: 'ShopIcon',
  },
  {
    href: Routes.user.list,
    label: 'Partners',
    icon: 'UsersIcon',
  },
  {
    href: 'demo',
    label: 'Deals Vouchers',
    icon: 'ShopIcon',
  },
  {
    href: Routes.product.list,
    label: 'sidebar-nav-item-products',
    icon: 'ProductsIcon',
  },
  {
    href: Routes.order.list,
    label: 'sidebar-nav-item-orders',
    icon: 'OrdersIcon',
  },
  {
    href: 'demo',
    label: 'Wallet',
    icon: 'ShopIcon',
  },
  {
    href: Routes.withdraw.list,
    label: 'Invoice',
    icon: 'WithdrawIcon',
  }

];

let Store = [
  {
    href: Routes.dashboard,
    label: 'sidebar-nav-item-dashboard',
    icon: 'DashboardIcon',
  },
  {
    href: Routes.shop.create,
    label: 'Shop',
    icon: 'ShopIcon',
  },
  {
    href: Routes.store.create,
    label: 'Store',
    icon: 'ShopIcon',
  },
  {
    href: Routes.user.list,
    label: 'Partners',
    icon: 'UsersIcon',
  },
  {
    href: 'demo',
    label: 'Deals Vouchers',
    icon: 'ShopIcon',
  },
  {
    href: Routes.product.list,
    label: 'sidebar-nav-item-products',
    icon: 'ProductsIcon',
  },
  {
    href: Routes.order.list,
    label: 'sidebar-nav-item-orders',
    icon: 'OrdersIcon',
  },
  {
    href: 'demo', 
    label: 'Wallet',
    icon: 'ShopIcon',
  },
  {
    href: Routes.withdraw.list,
    label: 'Invoice',
    icon: 'WithdrawIcon',
  }
];


export const siteSettings = {

  name: 'Pixer',
  description: '',
  logo: {
    url: '/downloadCard.jpg',
    alt: 'Pixer',
    href: '/',
    width: 128,
    height: 55,
  },
  defaultLanguage: 'en',
  author: {
    name: 'RedQ, Inc.',
    websiteUrl: 'https://redq.io',
    address: '',
  },
  headerLinks: [],
  authorizedLinks: [
    {
      href: Routes.profileUpdate,
      labelTransKey: 'authorized-nav-item-profile',
    },
    {
      href: Routes.logout,
      labelTransKey: 'authorized-nav-item-logout',
    },
  ],
  currencyCode: 'USD',
  sidebarLinks: {
    admin: (roleName == 'Sub Admin') ? arr : (roleName == 'Designer') ? Designers : (roleName == 'Store') ? Store : (roleName == 'Shop') ? Shop : arr3,
    // admin: [
    //   {
    //     href: Routes.dashboard,
    //     label: 'sidebar-nav-item-dashboard',
    //     icon: 'DashboardIcon',
    //   },
    //   {
    //     href: Routes.shop.list,
    //     label: 'sidebar-nav-item-shops',
    //     icon: 'ShopIcon',
    //   },
    //   {
    //     href: Routes.store.list,
    //     label: 'Stores',
    //     icon: 'ShopIcon',
    //   },
    //   {
    //     href: Routes.designer.list,
    //     label: 'Designers',
    //     icon: 'ShopIcon',
    //   },
    //   // {
    //   //   href: 'demo',
    //   //   label: 'demo',
    //   //   icon: 'ShopIcon',
    //   // },
    //   // {
    //   //   href: Routes.adminMyShops,
    //   //   label: 'sidebar-nav-item-my-shops',
    //   //   icon: 'MyShopIcon',
    //   // },
    //   // {
    //   //   href: Routes.product.list,
    //   //   label: 'sidebar-nav-item-products',
    //   //   icon: 'ProductsIcon',
    //   // },
    //   // {
    //   //   href: Routes.type.list,
    //   //   label: 'sidebar-nav-item-groups',
    //   //   icon: 'TypesIcon',
    //   // },
    //   // {
    //   //   href: Routes.category.list,
    //   //   label: 'sidebar-nav-item-categories',
    //   //   icon: 'CategoriesIcon',
    //   // },
    //   // {
    //   //   href: Routes.tag.list,
    //   //   label: 'sidebar-nav-item-tags',
    //   //   icon: 'TagIcon',
    //   // },
    //   // {
    //   //   href: Routes.order.list,
    //   //   label: 'sidebar-nav-item-orders',
    //   //   icon: 'OrdersIcon',
    //   // },
    //   // {
    //   //   href: Routes.orderStatus.list,
    //   //   label: 'sidebar-nav-item-order-status',
    //   //   icon: 'OrdersStatusIcon',
    //   // },
    //   // {
    //   //   href: Routes.order.create,
    //   //   label: 'sidebar-nav-item-create-order',
    //   //   icon: 'CalendarScheduleIcon',
    //   // },
    //   // {
    //   //   href: Routes.user.list,
    //   //   label: 'sidebar-nav-item-users',
    //   //   icon: 'UsersIcon',
    //   // },
    //   // {
    //   //   href: Routes.tax.list,
    //   //   label: 'sidebar-nav-item-taxes',
    //   //   icon: 'TaxesIcon', 
    //   // },
    //   // {
    //   //   href: Routes.withdraw.list,
    //   //   label: 'sidebar-nav-item-withdraws',
    //   //   icon: 'WithdrawIcon',
    //   // },
    //   // {
    //   //   href: Routes.question.list,
    //   //   label: 'sidebar-nav-item-questions',
    //   //   icon: 'QuestionIcon',
    //   // },
    //   // {
    //   //   href: Routes.reviews.list,
    //   //   label: 'sidebar-nav-item-reviews',
    //   //   icon: 'ReviewIcon',
    //   // },
    //   // {
    //   //   href: Routes.settings,
    //   //   label: 'sidebar-nav-item-settings',
    //   //   icon: 'SettingsIcon',
    //   // },
    // ],
    shop: [
      {
        href: (shop: string) => `${Routes.dashboard}${shop}`,
        label: 'sidebar-nav-item-dashboard',
        icon: 'DashboardIcon',
        permissions: adminOwnerAndStaffOnly,
      },
      {
        href: (shop: string) => `/${shop}${Routes.product.list}`,
        label: 'sidebar-nav-item-products',
        icon: 'ProductsIcon',
        permissions: adminOwnerAndStaffOnly,
      },
      {
        href: (shop: string) => `/${shop}${Routes.order.list}`,
        label: 'sidebar-nav-item-orders',
        icon: 'OrdersIcon',
        permissions: adminOwnerAndStaffOnly,
      },
      {
        href: (shop: string) => `/${shop}${Routes.staff.list}`,
        label: 'sidebar-nav-item-staffs',
        icon: 'UsersIcon',
        permissions: adminAndOwnerOnly,
      },
      {
        href: (shop: string) => `/${shop}${Routes.withdraw.list}`,
        label: 'sidebar-nav-item-withdraws',
        icon: 'AttributeIcon',
        permissions: adminAndOwnerOnly,
      },
      {
        href: (shop: string) => `/${shop}${Routes.reviews.list}`,
        label: 'sidebar-nav-item-reviews',
        icon: 'ReviewIcon',
        permissions: adminAndOwnerOnly,
      },
      {
        href: (shop: string) => `/${shop}${Routes.question.list}`,
        label: 'sidebar-nav-item-questions',
        icon: 'QuestionIcon',
        permissions: adminAndOwnerOnly,
      },
    ],
  },
  product: {
    placeholder: '/product-placeholder.svg',
  },
  avatar: {
    placeholder: '/avatar-placeholder.svg',
  },
};
