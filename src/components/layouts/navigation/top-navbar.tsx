import Logo from '@/components/ui/logo';
import { useUI } from '@/contexts/ui.context';
import AuthorizedMenu from './authorized-menu';
import LinkButton from '@/components/ui/link-button';
import { NavbarIcon } from '@/components/icons/navbar-icon';
import { motion } from 'framer-motion';
import { useTranslation } from 'next-i18next';
import { Routes } from '@/config/routes';
import {
  adminAndOwnerOnly,
  getAuthCredentials,
  hasAccess,
} from '@/utils/auth-utils';
import LanguageSwitcher from './language-switer';
import { Config } from '@/config';
import { useEffect, useState } from 'react';
import { useRouter } from 'next/router'

const Navbar = () => {
  const { t } = useTranslation();
  const { toggleSidebar } = useUI();
  const router = useRouter()
  const [currentRoute,setCurrentRoute] = useState('')

  const { permissions } = getAuthCredentials();

  const removeShopDetail = () => {
    localStorage.removeItem('dataForUpdate')
    localStorage.removeItem('userStatus')
    localStorage.removeItem('idForUpdate')
  }

  const { enableMultiLang } = Config;

  useEffect(() => {
    console.log('router.pathname', router.pathname)
    setCurrentRoute(router.pathname)
    if (router.pathname == '/stores') {
      console.log('enter store')
    } else {
      console.log('enter shop')
    }
  }, [router.pathname,currentRoute])

  return (
    <header className="fixed z-40 w-full bg-white shadow">
      <nav className="flex items-center justify-between px-5 py-4 md:px-8">
        {/* <!-- Mobile menu button --> */}
        <motion.button
          whileTap={{ scale: 0.88 }}
          onClick={toggleSidebar}
          className="flex h-full items-center justify-center p-2 focus:text-accent focus:outline-none lg:hidden"
        >
          <NavbarIcon />
        </motion.button>

        <div className="ms-5 me-auto hidden md:flex">
          <Logo />
        </div>

        <div className="space-s-8 flex items-center">
          {hasAccess(adminAndOwnerOnly, permissions) && (
            <>
            {(currentRoute == '/shops') ? (
               <LinkButton
               href={Routes.shop.create}
               className="ms-4 md:ms-6"
               size="small"
             >
               <span onClick={removeShopDetail}>{t('common:text-create-shop')}</span>
             </LinkButton>
            ) : (currentRoute == '/stores') ? (
              <LinkButton
              href={Routes.store.create}
              className="ms-4 md:ms-6"
              size="small"
            >
              <span onClick={removeShopDetail}>Create Store</span>
            </LinkButton>
            ) : (currentRoute == '/designers') ? (
              <LinkButton
              href={Routes.designer.create}
              className="ms-4 md:ms-6"
              size="small"
            >
              <span onClick={removeShopDetail}>Create Designer</span>
            </LinkButton>
            ) : ''}
            
            </>
           
          )}
          {enableMultiLang ? <LanguageSwitcher /> : null}
          <AuthorizedMenu />
        </div>
      </nav>
    </header>
  );
};

export default Navbar;
