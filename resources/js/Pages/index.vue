<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import MenuLayout from '@/Layouts/Menu.vue'
import CheckOut from '@/Layouts/CheckOut.vue'
import { Head } from '@inertiajs/vue3';
import { ref, toRefs, watch, onMounted } from 'vue'

const props = defineProps({
    menu: {
        type: Array        
    }    
});

const { menu } = toRefs(props)

</script>

<template>
    <Head title="Restro POS" />
    <AuthenticatedLayout>
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden">                    
                    <div class="grid grid-cols-12 gap-4">
                        <menu-layout :menu="menu"></menu-layout>
                        <check-out></check-out>                        
                    </div>                 
                </div>
            </div>            
        </div>
    </AuthenticatedLayout>
</template>
