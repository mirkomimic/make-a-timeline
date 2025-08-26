<template>
  <div class="overflow-x-auto">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Start</th>
          <th>End</th>
          <th>Sort order num</th>
        </tr>
      </thead>
      <tbody>
        <tr
          v-if="items?.data.length"
          v-for="(item, index) in items.data"
          :key="index"
          @click="selectRow(index, item)"
          :class="selectedRow === index ? 'bg-base-200' : ''"
          class="cursor-pointer hover:bg-base-300"
        >
          <th>{{ item.id }}</th>
          <td>{{ cutString(item.start, 4) }}</td>
          <td>{{ cutString(item.end, 10, true) }}</td>
          <td>{{ item.sort_order_num }}</td>
        </tr>
      </tbody>
    </table>
    <div class="flex w-full p-3">
      <Pagination class="mx-auto" :data="paginationMeta" />
    </div>
  </div>
</template>

<script setup lang="ts">
import Pagination from "@/Components/Pagination.vue";
import { useHelpers } from "@/Composables/helpers";
import { PaginatedData, PaginationData, TimelineItem } from "@/types/custom";
import { computed, ref } from "vue";

const props = defineProps<{
  items?: PaginatedData<TimelineItem>;
}>();

const paginationMeta = computed<PaginationData | undefined>(() => {
  if (!props.items) return undefined;
  const { data, ...rest } = props.items;
  return rest;
});

const { cutString } = useHelpers();

const selectedRow = ref<number | null>(null);
const selectedItem = ref<TimelineItem | {}>({});

const selectRow = (index: number, data: TimelineItem) => {
  selectedRow.value = index;
  selectedItem.value = data;
};
</script>
