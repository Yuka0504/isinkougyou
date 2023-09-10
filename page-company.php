
<?php get_header(); ?>

<?php
/* Template Name: 企業情報 */
?>

    <section id="company" class="section single-section">
        <div class="inner">
            <h1 class="section-title single-section-title">企業情報</h1>
            <div class="company-wrapper single-company-wrapper">
                <table class="company-table">
                    <tr>
                        <th>社名</th>
                        <td><?php echo CFS()->get('company-name'); ?></td>
                    </tr>
                    <tr>
                        <th>法人番号</th>
                        <td><?php echo CFS()->get('corporate-number'); ?></td>
                    </tr>
                    <tr>
                        <th>代表者名</th>
                        <td><?php echo CFS()->get('name'); ?></td>
                    </tr>
                    <tr>
                        <th>従業員数</th>
                        <td><?php echo CFS()->get('member'); ?></td>
                    </tr>
                    <tr>
                        <th>企業規模詳細</th>
                        <td><?php echo CFS()->get('scale-detail'); ?></td>
                    </tr>
                    <tr>
                        <th>創業年</th>
                        <td><?php echo CFS()->get('year'); ?></td>
                    </tr>
                    <tr>
                        <th>設立年月日</th>
                        <td><?php echo CFS()->get('establishment'); ?></td>
                    </tr>
                    <tr>
                        <th>営業品目</th>
                        <td><?php echo CFS()->get('kinds'); ?></td>
                    </tr>
                    <tr>
                        <th>事業概要</th>
                        <td><?php echo CFS()->get('company-detail'); ?></td>
                    </tr>
                    <tr>
                        <th>資格保有者数</th>
                        <td><?php echo CFS()->get('license'); ?></td>
                    </tr>
                    <tr>
                        <th>許可番号</th>
                        <td><?php echo CFS()->get('number'); ?></td>
                    </tr>
                    <tr>
                        <th>所在地</th>
                        <td><?php echo CFS()->get('address'); ?></td>
                    </tr>
                    <tr>
                        <th>TEL/FAX</th>
                        <td><?php echo CFS()->get('tel'); ?></td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td><?php echo CFS()->get('email'); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

<?php get_footer(); ?>