<?php
/* Smarty version 4.5.3, created on 2025-09-19 01:34:16
  from 'C:\laragon\www\phpnuxbill\ui\ui\widget\graph_monthly_registered_customers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68cc50a8e49b48_35146610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '993844dc27a7d6faf9c10ca87916deed9457586a' => 
    array (
      0 => 'C:\\laragon\\www\\phpnuxbill\\ui\\ui\\widget\\graph_monthly_registered_customers.tpl',
      1 => 1758216806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68cc50a8e49b48_35146610 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box box-solid ">
    <div class="box-header">
        <i class="fa fa-th"></i>

        <h3 class="box-title"><?php echo Lang::T('Monthly Registered Customers');?>
</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <a href="<?php echo Text::url('dashboard&refresh');?>
" class="btn bg-teal btn-sm"><i class="fa fa-refresh"></i>
            </a>
        </div>
    </div>
    <div class="box-body border-radius-none">
        <canvas class="chart" id="chart" style="height: 250px;"></canvas>
    </div>
</div>


<?php echo '<script'; ?>
 type="text/javascript">
    
        document.addEventListener("DOMContentLoaded", function() {
            var counts = JSON.parse('<?php echo json_encode($_smarty_tpl->tpl_vars['monthlyRegistered']->value);?>
');

            var monthNames = [
                'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
            ];

            var labels = [];
            var data = [];

            for (var i = 1; i <= 12; i++) {
                var month = counts.find(count => count.date === i);
                labels.push(month ? monthNames[i - 1] : monthNames[i - 1].substring(0, 3));
                data.push(month ? month.count : 0);
            }

            var ctx = document.getElementById('chart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Registered Members',
                        data: data,
                        backgroundColor: 'rgba(0, 0, 255, 0.5)',
                        borderColor: 'rgba(0, 0, 255, 0.7)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            }
                        }
                    }
                }
            });
        });
    
<?php echo '</script'; ?>
><?php }
}
