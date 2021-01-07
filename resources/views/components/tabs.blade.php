@props(['active'])

<div x-data="{ activeTab: '{{ $active }}',
               tabHeadings: [],
               tabs: [],
               toggleTabs() {
                    this.tabs.forEach(
                        tab => tab.__x.$data.showIfActive(this.activeTab)
{{--                        .show = tab.__x.$data.name === this.activeTab--}}
                        );
                    }
               }"
     {{--    //get the name from tab component--}}
     x-init="() => {
          tabs = [...$refs.tabs.children];
{{--   convert to array to do forEach/map--}}
         tabHeadings = tabs.map((tab, index) => {
                 tab.__x.$data.id = (index + 1);

                return tab.__x.$data.name;
            });

         toggleTabs();
      }"
>
    <div class="mb-3"
         role="tablist">
        <template x-for="(tab, index) in tabHeadings" :key="index">
            <button x-text="tab"
                    @click="activeTab = tab; toggleTabs();"
                    class="px-4 py-1 text-sm rounded hover:bg-blue-500 hover:text-white"
                    :class="tab === activeTab ? 'bg-blue-500 text-white' : 'text-gray-800'"
                    :id="`tab-${index + 1}`"
                    role="tab"
                    :aria-selected="(tab === activeTab).toString()"
                    :aria-controls="`tab-panel-${index + 1}`"
            ></button>
        </template>
    </div>
    {{--    //$el. is a magic variable that grabs the root element--}}
    <div x-ref="tabs">
        {{ $slot }}
    </div>
</div>
