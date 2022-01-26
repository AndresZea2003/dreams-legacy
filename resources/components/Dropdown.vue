<template>
  <div>
    <Menu as="div" class="relative inline-block text-left">
      <div>
        <MenuButton
          class="inline-flex justify-end w-full px-4 py-2 text-sm font-medium text-white rounded-md bg-opacity-20 hover:bg-opacity-30 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75"
          
        >
           <img class="rounded-full cursor-pointer hover:opacity-90" :src="`https://ui-avatars.com/api/?name=${name}&background=FFF8DC&color=000000&size=50&bold=true`" alt="avatar">
         
        </MenuButton>
      </div>

      <transition
        enter-active-class="transition duration-100 ease-out"
        enter-from-class="transform scale-95 opacity-0"
        enter-to-class="transform scale-100 opacity-100"
        leave-active-class="transition duration-75 ease-in"
        leave-from-class="transform scale-100 opacity-100"
        leave-to-class="transform scale-95 opacity-0"
      >
        <MenuItems
          class="absolute right-0 w-56 mt-2 origin-top-right bg-white divide-y divide-gray-100 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
        >
          <div class="px-1 py-1"> 
            <MenuItem v-slot="{ active }">
              <a href="/profile"
                :class="[
                  active ? 'bg-sky-800 text-white' : 'text-gray-900',
                  'group flex rounded-md items-center w-full px-2 py-2 text-sm',
                ]"
              >
                <UserIcon
                  :active="active"
                  class="w-5 h-5 mr-2 text-violet-400"
                  aria-hidden="true"
                />
                Profile
              </a>
            </MenuItem>
            
             <MenuItem v-slot="{ active }">
              <a href="/panel"
                :class="[
                  active ? 'bg-sky-800 text-white' : 'text-gray-900',
                  'group flex rounded-md items-center w-full px-2 py-2 text-sm',
                ]"
              >
                <ClipboardListIcon
                  :active="active"
                  class="w-5 h-5 mr-2 text-violet-400"
                  aria-hidden="true"
                />
                Panel
              </a>
            </MenuItem>
          </div>
          <div class="px-1 py-1">
            <MenuItem v-slot="{ active }">
               <button
                  type="submit"
                  form="logout"
                :class="[
                  active ? 'bg-red-500 text-white' : 'text-gray-900',
                  'group flex rounded-md items-center w-full px-2 py-2 text-sm',
                ]"
              >
                <LogoutIcon
                  :active="active"
                  class="w-5 h-5 mr-2 text-violet-400"
                  aria-hidden="true"
                />
                Logout
              </button>
            </MenuItem>
            
          </div>

        </MenuItems>
      </transition>
    </Menu>
  </div>
<form id="logout" class="hidden" :action="routes.logout.uri" method="POST"><CsrfToken /></form>
  
</template>

<script>
import CsrfToken from './helpers/CsrfToken';

import { routes } from '../js/use';
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { ChevronDownIcon, ArchiveIcon, DuplicateIcon, UserIcon,} from '@heroicons/vue/solid'
import {ClipboardListIcon, LogoutIcon} from '@heroicons/vue/outline'

export default {

  props: {
      name: {type: String, required: true}
  },
  components: {
    Menu,
    MenuButton,
    MenuItems,
    MenuItem,
    ChevronDownIcon,
    ArchiveIcon,
    DuplicateIcon,
    UserIcon,
    ClipboardListIcon,
    LogoutIcon,
    CsrfToken,
  },
  setup() {
      return { routes }
    }
}
</script>
