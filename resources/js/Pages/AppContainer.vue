<template>
    <van-tabs v-model:active="activeName">
        <van-tab title="Planning Data Entry" name="a">
            <van-row>
                <van-col span="3">
                    <label>AccNo</label>
                    <select class="form-select" aria-label="AccNo">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </van-col>
                <van-col span="5">
                    <label>Refcode Subactivity</label>
                    <select class="form-select" aria-label="AccNo">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </van-col>
                <van-col span="3">
                    <label>Category</label>
                    <select class="form-select" aria-label="AccNo">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </van-col>
                <van-col span="4">
                    <label>Financing</label>
                    <select class="form-select" aria-label="AccNo">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </van-col>
                <van-col span="3">
                    <label>Centre</label>
                    <select class="form-select" aria-label="AccNo">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </van-col>
            </van-row>
            <van-row>
                <van-col span="4">
                    <van-field v-model="fieldValue" is-link readonly label="Location" placeholder="Choose Location"
                        @click="showPicker = true" />
                    <van-popup v-model:show="showPicker" round position="bottom">
                        <van-picker title="Title" :columns="columns" @cancel="showPicker = false" @confirm="onConfirm" />
                    </van-popup>

                </van-col>
                <van-col span="3">
                    <van-field v-model="value" label="Officer" placeholder="Officer" label-align="top" />
                </van-col>
                <van-col span="8">
                    <van-checkbox-group v-model="checked" direction="horizontal">
                        <van-checkbox name="a">Q1</van-checkbox>
                        <van-checkbox name="b">Q2</van-checkbox>
                        <van-checkbox name="c">Q3</van-checkbox>
                        <van-checkbox name="d">Q4</van-checkbox> </van-checkbox-group>
                </van-col>
            </van-row>
            <van-row>
                <van-col span="24">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Item Description</th>
                                <th scope="col">Unit</th>
                                <th scope="col">Qty</th>
                                <th scope="col">UnitCost</th>
                                <th scope="col">Budget</th>
                                <th scope="col">SubItem</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                 <td>@mdo</td>
                                  <td>@mdo</td>
                                   <td>@mdo</td>
                                    <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                 <td>@mdo</td>
                                  <td>@mdo</td>
                                   <td>@mdo</td>
                                    <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                 <td>@mdo</td>
                                  <td>@mdo</td>
                                   <td>@mdo</td>
                                    <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </van-col>
            </van-row>

        </van-tab>
        <van-tab title="Target Data Entry" name="b">content of tab 2</van-tab>
        <van-tab title="Detailed by Component" name="c">content of tab 3</van-tab>
        <van-tab title="Summary by Component" name="d">content of tab 1</van-tab>
        <van-tab title="Summary by Categories and Financing" name="e">content of tab 2</van-tab>
        <van-tab title="Summary by Subitems" name="f">content of tab 3</van-tab>
    </van-tabs>
</template>
  
<script>

import { defineComponent, ref, inject } from 'vue'


export default defineComponent({
    components: {
    },
    setup(props, context) {

        const columns = [
            { text: 'Delaware', value: 'Delaware' },
            { text: 'Florida', value: 'Florida' },
            { text: 'Wenzhou', value: 'Wenzhou' },
            { text: 'Indiana', value: 'Indiana' },
            { text: 'Maine', value: 'Maine' },
        ];
        const onConfirm = ({ selectedValues }) => {
            showToast(`Value: ${selectedValues.join(',')}`);
        };
        const onChange = ({ selectedValues }) => {
            showToast(`Value: ${selectedValues.join(',')}`);
        };
        const onCancel = () => showToast('Cancel');

        const showPicker = ref(false);

        return {
            columns,
            onChange,
            onCancel,
            onConfirm,
            showPicker
        };
    },
    computed: {

    },
    data() {
        return {

        }

    },
    methods: {

    },
    mounted() {

    },
    created() {

    },
    watch: {

    },
})
</script>
  
  
<style scoped></style>