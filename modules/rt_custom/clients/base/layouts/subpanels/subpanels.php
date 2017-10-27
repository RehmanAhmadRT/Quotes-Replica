<?php
// $viewdefs['rt_custom']['base']['layout']['subpanels'] = array(
//
//     'components' => array(
//         array(
//             'layout' => 'subpanel',
//             'label' => 'LBL_ACCOUNTS_SUBPANEL_TITLE',
//             'context' => array(
//                 'link' => 'accounts',
//             ),
//         ),
//
//     ),
// );

$viewdefs['rt_custom']['base']['layout']['subpanels']['components'][] = array (
    'layout' => 'subpanel',
    'label' => 'LBL_CALLS_SUBPANEL_TITLE',
    'context' =>
      array (
          'link' => 'calls',
      ),

);
