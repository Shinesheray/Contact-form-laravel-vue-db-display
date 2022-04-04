<template>
<div>
<div class="max-w-2xl mx-auto">

<table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-800 text-gray-200">
  <tr class="text-left border-b border-gray-300">
    <th class="px-4 py-3">Name</th>
    <th class="px-4 py-3">Email</th>
    <th class="px-4 py-3">Gender</th>
    <th class="px-4 py-3">Content</th>
  </tr>
  <tr class="bg-gray-700 border-b border-gray-600">
    <td class="px-4 py-3">{{contact.name}}</td>
    <td class="px-4 py-3">{{contact.email}}</td>
    <td class="px-4 py-3">{{contact.gender}}</td>
    <td class="px-4 py-3">{{contact.content}}</td>
  </tr>    
</table>

	</div>
	</div>

  </template>

<script>
//exporting the details to another page 
export default {
  props: ['contact']
}
</script>

<style>

</style>