@props(['text'])

<div
    x-data="{
        expanded: false,
        showButton: false,
        init() {
            this.$nextTick(() => {
                const el = this.$refs.text;
                this.showButton = el.scrollHeight > el.offsetHeight;
            });
        }
    }"
>
    <div {{ $attributes->merge(['class' => '']) }}>
        <p
                x-ref="text"
                :class="{ 'line-clamp-3': !expanded }"
                class="transition-all"
        >
            {!! \Illuminate\Support\Str::of($text)->replace("\n", '<br>')->sanitizeHtml() !!}
        </p>

        <button
                x-show="showButton && !expanded"
                @click="expanded = true"
                class="mt-3 text-sm text-gray-500 dark:text-gray-400 hover:text-blue-500 hover:underline underline-offset-2 hover:text-blue-500"
        >
            {{ __('Read more') }}…
        </button>
    </div>
</div>
