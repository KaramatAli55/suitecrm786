<?php /* Smarty version 2.6.29, created on 2017-10-10 11:33:11
         compiled from themes/SuiteP/include/ListView/ListViewSelectObjects.tpl */ ?>
<div class="selectedRecords label hidden"><?php echo $this->_tpl_vars['APP']['LBL_LISTVIEW_SELECTED_OBJECTS']; ?>
</div><div class="selectedRecords value hidden"><?php echo $this->_tpl_vars['TOTAL_ITEMS_SELECTED']; ?>
</div>
<input type='hidden' id='selectCountTop' name='selectCount[]' value='<?php echo $this->_tpl_vars['TOTAL_ITEMS_SELECTED']; ?>
' />

<script>
<?php echo '
    $(document).ready(function () {
        function update_selectedRecordsTopValue() {
            var selectedNum = sugarListView.get_num_selected();
            if(!selectedNum) {
                $(\'.selectedRecords\').addClass(\'hidden\');
            }
            else {
                $(\'.selectedRecords\').removeClass(\'hidden\');
            }
            $(\'.selectedRecords.value\').html(selectedNum);
        }
        setInterval(update_selectedRecordsTopValue, 100);
    });
'; ?>

</script>