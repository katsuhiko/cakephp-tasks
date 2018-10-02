<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.min.js"></script>
<style>
[v-cloak] { display:none; }
</style>

<h2>Test</h2>
<div id="app" v-cloak>
<table>
    <thead>
        <tr>
            <th>test1</th>
            <th>test2</th>
            <th>test3</th>
            <th>test4</th>
            <th>test5</th>
            <th>test6</th>
            <th>test7</th>
            <th>test8</th>
            <th>test9</th>
            <th>test10</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="(item, index) in items" @click="select(index)">
            <td>
                <span v-if="editMode(index)"><input type="text" v-model:value="item.name"/></span>
                <span v-else>{{ item.name }}</span>
            </td>           
            <td>{{ index }}</td>
            <td>{{ item.name }}</td>
            <td>
                <span v-if="editMode(index)"><input type="text" v-model:value="item.name"/></span>
                <span v-else>{{ item.name }}</span>
            </td>           
            <td>
                <span v-if="editMode(index)"><input type="text" v-model:value="item.name"/></span>
                <span v-else>{{ item.name }}</span>
            </td>           
            <td>
                <span v-if="editMode(index)"><input type="text" v-model:value="item.name"/></span>
                <span v-else>{{ item.name }}</span>
            </td>           
            <td>
                <span v-if="editMode(index)"><input type="text" v-model:value="item.name"/></span>
                <span v-else>{{ item.name }}</span>
            </td>           
            <td>
                <span v-if="editMode(index)"><input type="text" v-model:value="item.name"/></span>
                <span v-else>{{ item.name }}</span>
            </td>           
            <td>
                <span v-if="editMode(index)"><input type="text" v-model:value="item.name"/></span>
                <span v-else>{{ item.name }}</span>
            </td>           
            <td>
                <span v-if="editMode(index)"><input type="text" v-model:value="item.name"/></span>
                <span v-else>{{ item.name }}</span>
            </td>           
        </tr>
    </tbody>
</table>
</div>

<?php
// データ作成
$items = [];
for ($i = 0; $i < 2000; $i++) {
    $items[] = ['name' => substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, 10)];
}
?>
<script>
 // データを JSON へ変換
var items = <?= json_encode($items, JSON_UNESCAPED_SLASHES) ?>;

// Vue を生成
var vm = new Vue({
    el: '#app',
    data: {
        items: items,
        selectIndex: -1
    },
    methods: {
        select: function(index) {
            this.selectIndex = index;
        },
        editMode: function(index) {
            return this.selectIndex === index;
        }
    }
})
</script>
