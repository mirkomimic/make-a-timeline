<template>
  <draggable
    v-model="timelineItems"
    item-key="orderId"
    v-bind="dragOptions"
    @start="drag = true"
    @end="onDragEnd"
    :component-data="{
      type: 'transition-group',
      name: !drag ? 'flip-list' : null,
    }"
  >
    <template #item="{ element }">
      <div
        class="list-group-item border-1 mb-1 w-full rounded-md border border-gray-400 p-2"
      >
        {{ element.start }}
      </div>
    </template>
  </draggable>
</template>

<script setup lang="ts">
import { TimelineItem } from "@/types/custom";
import { ref } from "vue";
import draggable from "vuedraggable";

const props = defineProps<{
  timelineId: number;
}>();

const timelineItems = defineModel<TimelineItem[]>("timelineItems", {
  default: () => [],
});

const drag = ref<boolean>(false);

const dragOptions = {
  animation: 200,
  ghostClass: "ghost",
  chosenClass: "not-draggable",
};

const onDragEnd = () => {
  timelineItems.value.forEach((item, index) => {
    item.sort_order_num = index + 1;
  });
  drag.value = false;
};
</script>

<style scoped>
.flip-list-move {
  transition: transform 0.5s;
}

.no-move {
  transition: transform 0s;
}

.ghost {
  opacity: 0.5;
  background: #c8ebfb;
}

.list-group {
  min-height: 20px;
}

.list-group-item {
  cursor: move;
}

.list-group-item i {
  cursor: pointer;
}
</style>
