<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import CheckOutItems from '@/Layouts/CheckOutItems.vue';
import CheckOutPayable from '@/Layouts/CheckOutPayable.vue';
import { Head } from '@inertiajs/vue3';
import { ref, toRefs, watch, onMounted } from 'vue'

</script>

<template>
    <Head title="Restro POS" />
    <AuthenticatedLayout>
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
                <div class="overflow-hidden grid grid-cols-6 gap-4">                    
                    <div class="col-start-2 col-span-4">
                        <check-out-items></check-out-items>
                    </div>
                    <check-out-payable></check-out-payable>                    
                    <div class="col-start-2 col-span-4 mb-2 text-right">
                        <v-btn color="red" class="mr-2" :href="route('index')">Back</v-btn>
                        <v-btn color="primary">Please Confirm Purchase</v-btn>
                    </div>                    
                </div>
            </div>            
        </div>
    </AuthenticatedLayout>
</template>
