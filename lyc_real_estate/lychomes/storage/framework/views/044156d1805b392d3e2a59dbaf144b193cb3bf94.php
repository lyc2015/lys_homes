<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('index2/css/recruit/newgraduate.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="contents" class="outline">
    <div class="main">

        <div class="page_header page_header_design">
            <div class="page_header_parts page_header_bg_img"></div>
            <div class="page_header_parts page_header_catch">
                <div class="inner">
                    <h2 class="page_title">
                        <span class="title-en theme_font">Newgraduate</span>
                        <span class="title-ja">新卒採用</span>
                    </h2>
                </div>
            </div>
        </div>


        <div class="content_block width_full clearfix">
            <div class="block_inner content1">
                <h2 class="content_title">
                    <span class="title-ja">新卒採用</span>
                    <span class="title-en">Newgraduate</span>
                </h2>

                <table class="table-outline">
                    <tbody>
                        <tr>
                            <th class="title">社員種別</th>
                            <td>正社員</td>
                        </tr>
                        <tr>
                            <th class="title">初任給</th>
                            <td>大卒総合職　215,000円</td>
                        </tr>
                        <tr>
                            <th class="title">試雇期間</th>
                            <td>6ヶ月　※試雇期間中の労働条件の相違なし</td>
                        </tr>
                        <tr>
                            <th class="title">諸手当</th>
                            <td>時間外手当、休日出勤手当、営業手当、資格手当、扶養手当 など</td>
                        </tr>
                        <tr>
                            <th class="title">昇給</th>
                            <td>年1回（7月）</td>
                        </tr>
                        <tr>
                            <th class="title">賞与</th>
                            <td>年2回（6、12月）</td>
                        </tr>
                        <tr>
                            <th class="title">勤務地</th>
                            <td>本社（初台）および各営業所・事業所</td>
                        </tr>
                        <tr>
                            <th class="title">勤務時間</th>
                            <td>本社／ 9：30～18：30 ※一部フレックスタイム制あり<br />営業所／ 9：30～18：30</td>
                        </tr>
                        <tr>
                            <th class="title">休日休暇</th>
                            <td>本社／完全週休2日制（土・日曜日）、指定休暇（年間14日）<br />営業所／完全週休2日制（火・水曜日）、指定休暇（年間14日）<br />共通／年次有給休暇、保存年次有給休暇、結婚休暇、忌引休暇、病気休暇、産前産後休暇、看護介護<br />休暇　ほか</td>
                        </tr>
                        <tr>
                            <th class="title">福利厚生</th>
                            <td>雇用保険、厚生年金、健康保険、京王共済組合、退職金、確定拠出年金、永年勤続表彰、借上社宅、<br />財形貯蓄、京王グループ従業員持株会</td>
                        </tr>
                        <tr>
                            <th class="title">教育制度</th>
                            <td>新入社員研修、階層別研修、宅地建物取引士資格取得講座ほか</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>