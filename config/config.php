<?php

function getConfig()
{
    return [

        // -------------------------------------------------------------------------------------------------------------
        // Web PKI Configuration
        // -------------------------------------------------------------------------------------------------------------
        'webPki' => [

            // Base64-encoded binary license for the Web PKI. This value is passed to Web PKI component's constructor.
            'license' => null
        ],

        // -------------------------------------------------------------------------------------------------------------
        // REST PKI Configuration
        // -------------------------------------------------------------------------------------------------------------
        'restPki' => [

            // =================================================
            //     >>>> PASTE YOU ACCESS TOKEN BELOW <<<<
            // =================================================
            'accessToken' => 'h_TrqxBrzl_zIWhdAdFpFyGmCOWEUz1xQJ51FeQ03kpVJ2LqGrktBdcspuOm94CJv8AgGc8p7etKIfEMXh_pgzlEqzBYtetiJRjNM8HQxX5QKH8MbZR2HePIFs-3ipd-164qMD-xMCqqDXOmljnMd_CfKjBOkW6cPzjf6-w878zaoMGZBe4C7m7DKG2uNnsfdIpM1sTaar1Ot6xY71dBJkrId1-XgNGWU9hMFwfH1MXa4M-CmUtFIqnWuf31BId90gpsGsXq9dYup3MnWXzUoQlVp1WvYt1ZlfKqVdHl5jrQx5_xb41fgsW_8x2jbx5UeTmttHguyGm4F9Xkwvs2eub6bvltmK-oscCxTBk2Rh2iNJ8j0oKF_5HhCWNp_AYxjoovNJS1XuWegPLCbbguA8LVQtGG1-tdkpowe8l5i_4Ly-h7vix89MoyJ6XMBi0KPVHw4OUpVNQ3fV3C0vYayFEVPAMpgF3vISugh8iqVZapY3CuCrMlzck628nObD_UPjj5tA',

            // Address of your Rest PKI installation (with the trailing '/' character)
            "endpoint" => null
        ]
    ];
}