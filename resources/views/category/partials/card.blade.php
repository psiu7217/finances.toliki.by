<section class="space-y-6">
    <header class="border-t py-2 border-gray-100 dark:border-gray-700">
        <a href="{{ route('category.edit', $category->id) }}" class="flex justify-between items-center">
            <span class="text-gray-400 dark:text-gray-200">{{  $category->title  }}</span>
            <span class="text-gray-400 dark:text-gray-200">{{  $category->plans->sortByDesc('created_at')->first()->cash  }} BYN</span>
        </a>
    </header>

</section>
