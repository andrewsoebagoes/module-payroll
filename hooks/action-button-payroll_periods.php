<?php

return '<a href="'.routeTo('payroll/index-payroll-periods-users',['filter' =>['period_id' => $data->id]]).'" class="btn btn-sm btn-info"><i class="fas fa-vcard"></i> '.__('payroll.label.employee').'</a> ';