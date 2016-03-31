
<?php $menu = DB::table('loaisp')->orderBy('thutu')->get(); ?>
<div class="block menu-list branch-mobile "><h4 class="pd5x10"> Danh mục</h4>
    <ul class="nav nav-list w190px bs-docs-sidenav ">
        @foreach($menu as $item)
        <li>
            <a href="{!!URL::route('product.getListCate',$item->id)!!}" ><span class="branch-mobile">{!!$item->name!!}</span></a>
        </li>
        @endforeach
</div>