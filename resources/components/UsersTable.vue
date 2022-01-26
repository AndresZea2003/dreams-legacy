<template>
    <div class="flex justify-center mt-5">
        <div>
            <table class="shadow border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-gray-100">
                    <tr>
                        <th scope="col" class="pl-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Id
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Role
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                          <span class="sr-only">Delete</span>
                        </th>
                        <th>
                           <!-- <button
                                type="submit"
                                form="delete"
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
                              delete
                            </button> -->
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white1">
                    <tr v-for="user in users" :key="user.id">
                        <td class="pl-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          {{ user.id }}
                        </td>
                        <td class="px-6 py-3 text-left text-xs font-medium text-gray-500">
                          <div class="flex items-center">
                              <img class="h-10 w-10 rounded-full" :src="`https://ui-avatars.com/api/?name=${user.name}&background=FFF8DC&color=000000&size=50&bold=true`" alt="Avatar" />
                            <div class="ml-4">
                              <div class="text-sm font-bold text-gray-900 uppercase">
                                {{ user.name }}
                              </div>
                              <div class="text-sm text-gray-500">
                                {{ user.email }}
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                            <span class="flex gap-2 items-center px-4 py-1 rounded-full text-sm font-medium">
                                {{ user.disabledAt ? 'Disabled' : 'Enabled' }}
                                <CSwitch/>
                          </span>
                        </td>
                        <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          {{ user.role }}
                        </td>
                        <td class="relative px-6 py-3">
                          <button 
                          type="submit"
                          form="delete"
                          class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            <TrashIcon class="-ml-1 mr-3 h-5 w-5" aria-hidden="true" />
                            Delete
                          </button>
                          
                        </td>
                      <form id="delete" class="hidden" :action="routes['user.destroy'].uri.replace('{user}', user.id)" method="POST"><CsrfToken />
                      <input type="hidden" name="_method" value="DELETE">
                      </form>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import CsrfToken from './helpers/CsrfToken';
import { routes } from '../js/use';

import CSwitch from './CSwitch';
import { TrashIcon, LogoutIcon } from '@heroicons/vue/outline';

export default {
  name: 'UsersTable',
    components: { 
      CSwitch, 
      TrashIcon,
      LogoutIcon, 
      CsrfToken, },
    
    props: { users: { type: Object, required: true } },
  setup(props) {
      console.log(props.pagination)
    const toggleStatus = (user) => {
        console.log(user)
    }
    return {toggleStatus, routes}
  },
}
</script>