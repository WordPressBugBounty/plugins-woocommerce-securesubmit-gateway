<?php

/**
 * Class HpsItemChoiceTypePosResponseVer10Transaction
 */
abstract class HpsItemChoiceTypePosResponseVer10Transaction
{
    const ADD_ATTACHMENT                = 'AddAttachment';
    const AUTHENTICATE                  = 'Authenticate';
    const BATCH_CLOSE                   = 'BatchClose';
    const CANCEL_IMPERSONATION          = 'CancelImpersonation';
    const CHECK_SALE                    = 'CheckSale';
    const CHECK_VOID                    = 'CheckVoid';
    const CREDIT_ACCOUNT_VERIFY         = 'CreditAccountVerify';
    const CREDIT_ADD_TO_BATCH           = 'CreditAddToBatch';
    const CREDIT_AUTH                   = 'CreditAuth';
    const CREDIT_CPC_EDIT               = 'CreditCPCEdit';
    const CREDIT_INCREMENTAL_AUTH       = 'CreditIncrementalAuth';
    const CREDIT_OFFLINE_AUTH           = 'CreditOfflineAuth';
    const CREDIT_OFFLINE_SALE           = 'CreditOfflineSale';
    const CREDIT_RETURN                 = 'CreditReturn';
    const CREDIT_REVERSAL               = 'CreditReversal';
    const CREDIT_SALE                   = 'CreditSale';
    const CREDIT_TXN_EDIT               = 'CreditTxnEdit';
    const CREDIT_VOID                   = 'CreditVoid';
    const DEBIT_ADD_VALUE               = 'DebitAddValue';
    const DEBIT_RETURN                  = 'DebitReturn';
    const DEBIT_REVERSAL                = 'DebitReversal';
    const DEBIT_SALE                    = 'DebitSale';
    const EBT_BALANCE_INQUIRY           = 'EBTBalanceInquiry';
    const EBT_CASH_BACK_PURCHASE        = 'EBTCashBackPurchase';
    const EBT_CASH_BENEFIT_WITHDRAWAL   = 'EBTCashBenefitWithdrawal';
    const EBT_FS_PURCHASE               = 'EBTFSPurchase';
    const EBT_FS_RETURN                 = 'EBTFSReturn';
    const EBT_VOUCHER_PURCHASE          = 'EBTVoucherPurchase';
    const END_TO_END_TEST               = 'EndToEndTest';
    const FIND_TRANSACTIONS             = 'FindTransactions';
    const GET_ATTACHMENTS               = 'GetAttachments';
    const GET_USER_DEVICE_SETTINGS      = 'GetUserDeviceSettings';
    const GET_USER_SETTINGS             = 'GetUserSettings';
    const GIFT_CARD_ACTIVATE            = 'GiftCardActivate';
    const GIFT_CARD_ADD_VALUE           = 'GiftCardAddValue';
    const GIFT_CARD_BALANCE             = 'GiftCardBalance';
    const GIFT_CARD_CURRENT_DAY_TOTALS  = 'GiftCardCurrentDayTotals';
    const GIFT_CARD_DEACTIVATE          = 'GiftCardDeactivate';
    const GIFT_CARD_PREVIOUS_DAY_TOTALS = 'GiftCardPreviousDayTotals';
    const GIFT_CARD_REPLACE             = 'GiftCardReplace';
    const GIFT_CARD_REVERSAL            = 'GiftCardReversal';
    const GIFT_CARD_SALE                = 'GiftCardSale';
    const GIFT_CARD_VOID                = 'GiftCardVoid';
    const IMPERSONATE                   = 'Impersonate';
    const INVALIDATE_AUTHENTICATION     = 'InvalidateAuthentication';
    const MANAGE_SETTINGS               = 'ManageSettings';
    const MANAGE_USERS                  = 'ManageUsers';
    const PRE_PAID_ADD_VALUE            = 'PrePaidAddValue';
    const PRE_PAID_BALANCE_INQUIRY      = 'PrePaidBalanceInquiry';
    const RECURRING_BILLING             = 'RecurringBilling';
    const REPORT_ACTIVITY               = 'ReportActivity';
    const REPORT_BATCH_DETAIL           = 'ReportBatchDetail';
    const REPORT_BATCH_HISTORY          = 'ReportBatchHistory';
    const REPORT_BATCH_SUMMARY          = 'ReportBatchSummary';
    const REPORT_OPEN_AUTHS             = 'ReportOpenAuths';
    const REPORT_SEARCH                 = 'ReportSearch';
    const REPORT_TXN_DETAIL             = 'ReportTxnDetail';
    const SEND_RECEIPT                  = 'SendReceipt';
    const TEST_CREDENTIALS              = 'TestCredentials';
}
