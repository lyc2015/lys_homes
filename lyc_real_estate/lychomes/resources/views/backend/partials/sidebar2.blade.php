    <aside id="leftsidebar" class="sidebar">

        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/sales') ? 'active' : '' }}">
                    <a href="{{ route('admin.sale') }}">
                        <i class="material-icons">home</i>
                        <span>販売物件</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/rents') ? 'active' : '' }}">
                    <a href="{{ route('admin.rent') }}">
                        <i class="material-icons">home</i>
                        <span>賃貸物件</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/companyinfo') ? 'active' : '' }}">
                    <a href="{{ route('admin.companyinfo.index') }}">
                        <i class="material-icons">home</i>
                        <span>会社概要</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/companyinfozh') ? 'active' : '' }}">
                    <a href="{{ route('admin.companyinfozh.index') }}">
                        <i class="material-icons">home</i>
                        <span>会社概要(中文)</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/career') ? 'active' : '' }}">
                    <a href="{{ route('admin.career.index') }}">
                        <i class="material-icons">home</i>
                        <span>キャリア採用</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/newgraduate') ? 'active' : '' }}">
                    <a href="{{ route('admin.newgraduate.index') }}">
                        <i class="material-icons">home</i>
                        <span>新卒採用</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/contact') ? 'active' : '' }}">
                    <a href="{{ route('admin.contact.index') }}">
                        <i class="material-icons">home</i>
                        <span>お問合せ・連絡先</span>
                    </a>
                </li>

                <li class="{{ Request::is('admin/homepage/1/edit') ? 'active' : '' }}">
                    <a href="{{ route('admin.homepage.edit', 1) }}">
                        <i class="material-icons">home</i>
                        <span>HomePage設定</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/article') ? 'active' : '' }}">
                    <a href="{{ route('admin.article.index') }}">
                        <i class="material-icons">home</i>
                        <span>会社ニュース</span>
                    </a>
                    </a>
                </li>

<!--
                <li class="{{ Request::is('admin/fileupload') ? 'active' : '' }}">
                    <a href="{{ route('admin.fileupload.index') }}">
                        <i class="material-icons">home</i>
                        <span>ファイルUPLOAD</span>
                    </a>
                </li>
-->
                <!--
                <li class="{{ Request::is('admin/videos') ? 'active' : '' }}">
                    <a href="{{ route('admin.video.get') }}">
                        <i class="material-icons">dashboard</i>
                        <span>トップページの動画表示</span>
                    </a>
                </li>
-->
<!--
                <li>
                    <a href="#" onclick="$(this).parent().children('ul').toggle(300);" style="padding:0px 13px">
                        <i class="material-icons">home</i>
                        <span>TEST</span>
                    </a>
                    <ul class="ul" style="list-style-type:square;">
                        <li class="{{ Request::is('admin/homepage/1/edit') ? 'active' : '' }}">
                            <a href="{{ route('admin.homepage.edit', 1) }}" style="padding:0px">
                                <span>HomePage設定</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/homepage/1/edit') ? 'active' : '' }}">
                            <a href="{{ route('admin.homepage.edit', 1) }}" style="padding:0px">
                                <span>HomePage設定</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/homepage/1/edit') ? 'active' : '' }}">
                            <a href="{{ route('admin.homepage.edit', 1) }}" style="padding:0px">
                                <span>HomePage設定</span>
                            </a>
                        </li>

                    </ul>
                </li>
-->

            </ul>
        </div>
        <!-- #Menu -->

    </aside>

