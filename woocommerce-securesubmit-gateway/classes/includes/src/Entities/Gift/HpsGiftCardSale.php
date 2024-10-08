<?php

/**
 * Class HpsGiftCardSale
 */
class HpsGiftCardSale extends HpsGiftCardActivate
{
    public $splitTenderCardAmount = null;
    public $splitTenderBalanceDue = null;
    /**
     * @param        $rsp
     * @param        $txnType
     * @param string $returnType
     *
     * @return mixed
     */
    public static function fromDict($rsp, $txnType, $returnType = 'HpsGiftCardSale')
    {
        $item = $rsp->Transaction;

        $sale = parent::fromDict($rsp, $txnType, $returnType);
        $sale->splitTenderCardAmount = (isset($item->SplitTenderCardAmt) ? (string)$item->SplitTenderCardAmt : null);
        $sale->splitTenderBalanceDue = (isset($item->SplitTenderBalanceDueAmt) ? (string)$item->SplitTenderBalanceDueAmt : null);

        return $sale;
    }
}
