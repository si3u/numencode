<li data-jstree='{"type":"{{ isset($menu[$item->id]) ? 'folder' : 'page' }}"}'>
    <span title="{{ $item->title }}" onclick="javascript:location.href='{{ route('pages.edit', ['page' => $item]) }}'">{{ $item->title }}</span>
    @if(isset($menu[$item->id]))
        @include('admin::menus.list', ['collection' => $menu[$item->id]])
    @endif
</li>