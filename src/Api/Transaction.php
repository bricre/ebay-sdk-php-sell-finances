<?php

namespace Ebay\Sell\Finances\Api;

use Ebay\Sell\Finances\Model\Transactions as Transactions;
use Ebay\Sell\Finances\Model\TransactionSummaryResponse as TransactionSummaryResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Transaction extends AbstractAPI
{
    /**
     * This method allows a seller to retrieve one or monetary transactions. In this
     * case, 'monetary transactions' include sales orders, buyer refunds, seller
     * credits, buyer-initiated payment disputes, eBay shipping label purchases, and
     * transfers. There are numerous input filters available for use, including filters
     * to retrieve specific types of monetary transactions, to retrieve monetary
     * transactions processed within a specific date range, or to retrieve monetary
     * transactions in a specific state. See the filter field for more information on
     * each filter, and how each one is used. There are also pagination and sort query
     * parameters that allow users to further control the monetary transactions that
     * are returned in the response. If no monetary transactions match the input
     * criteria, an http status code of 204 No Content is returned with no response
     * payload.
     *
     * @param array $queries options:
     *                       'filter'	string	Numerous filters are available for the getTransactions method,
     *                       and these filters are discussed below. One or more of these filter types can be
     *                       used. If none of these filters are used, all monetary transactions from the last
     *                       90 days are returned: transactionDate: search for monetary transactions that
     *                       occurred within a specific range of dates. Note: All dates must be input using
     *                       UTC format (YYYY-MM-DDTHH:MM:SS.SSSZ) and should be adjusted accordingly for the
     *                       local timezone of the user. Below is the proper syntax to use if filtering by a
     *                       date range:
     *                       https://apiz.ebay.com/sell/finances/v1/transaction?filter=transactionDate:[2018-10-23T00:00:01.000Z..2018-11-09T00:00:01.000Z]
     *                       Alternatively, the user could omit the ending date, and the date range would
     *                       include the starting date and up to 90 days past that date, or the current date
     *                       if the starting date is less than 90 days in the past. transactionType: search
     *                       for a specific type of monetary transaction. The supported transactionType
     *                       values are as follows: SALE: a sales order. REFUND: a refund to the buyer after
     *                       an order cancellation or return. CREDIT: a credit issued by eBay to the seller's
     *                       account. DISPUTE: a monetary transaction associated with a payment dispute
     *                       between buyer and seller. NON_SALE_CHARGE: a monetary transaction involving a
     *                       seller transferring money to eBay for the balance of a charge for
     *                       NON_SALE_CHARGE transactions (transactions that contain non-transactional seller
     *                       fees). These can include a one-time payment, monthly/yearly subscription fees
     *                       charged monthly, NRC charges, and fee credits. SHIPPING_LABEL: a monetary
     *                       transaction where eBay is billing the seller for an eBay shipping label. Note
     *                       that the shipping label functionality will initially only be available to a
     *                       select number of sellers. TRANSFER: A transfer is a monetary transaction where
     *                       eBay is billing the seller for reimbursement of a charge. An example of a
     *                       transfer is a seller reimbursing eBay for a buyer refund.Below is the proper
     *                       syntax to use if filtering by a monetary transaction type:
     *                       https://apiz.ebay.com/sell/finances/v1/transaction?filter=transactionType:{SALE}
     *                       transactionStatus: this filter type is only applicable for sales orders, and
     *                       allows the user to filter seller payouts in a particular state. The supported
     *                       transactionStatus values are as follows: PAYOUT: this indicates that the
     *                       proceeds from the corresponding sales order has been paid out to the seller's
     *                       account. FUNDS_PROCESSING: this indicates that the funds for the corresponding
     *                       monetary transaction are currently being processed. FUNDS_AVAILABLE_FOR_PAYOUT:
     *                       this indicates that the proceeds from the corresponding sales order are
     *                       available for a seller payout, but processing has not yet begun. FUNDS_ON_HOLD:
     *                       this indicates that the proceeds from the corresponding sales order are
     *                       currently being held by eBay, and are not yet available for a seller payout.
     *                       COMPLETED: this indicates that the funds for the corresponding TRANSFER monetary
     *                       transaction have transferred and the transaction has completed. FAILED: this
     *                       indicates the process has failed for the corresponding TRANSFER monetary
     *                       transaction. Below is the proper syntax to use if filtering by transaction
     *                       status:
     *                       https://apiz.ebay.com/sell/finances/v1/transaction?filter=transactionStatus:{PAYOUT}
     *                       buyerUsername: the eBay user ID of the buyer involved in the monetary
     *                       transaction. Only monetary transactions involving this buyer are returned. Below
     *                       is the proper syntax to use if filtering by a specific eBay buyer:
     *                       https://apiz.ebay.com/sell/finances/v1/transaction?filter=buyerUsername:{buyer1234}
     *                       salesRecordReference: the unique Selling Manager identifier of the order
     *                       involved in the monetary transaction. Only monetary transactions involving this
     *                       Selling Manager Sales Record ID are returned. Below is the proper syntax to use
     *                       if filtering by a specific Selling Manager Sales Record ID:
     *                       https://apiz.ebay.com/sell/finances/v1/transaction?filter=salesRecordReference:{123}
     *                       Note: For all orders originating after February 1, 2020, a value of 0 will be
     *                       returned in the salesRecordReference field. So, this filter will only be useful
     *                       to retrieve orders than occurred before this date. payoutId: the unique
     *                       identifier of a seller payout. This value is auto-generated by eBay once the
     *                       seller payout is set to be processed. Only monetary transactions involving this
     *                       Payout ID are returned. Below is the proper syntax to use if filtering by a
     *                       specific Payout ID:
     *                       https://apiz.ebay.com/sell/finances/v1/transaction?filter=payoutId:{5000106638}
     *                       transactionId: the unique identifier of a monetary transaction. For a sales
     *                       order, the orderId filter should be used instead. Only the monetary transaction
     *                       defined by the identifier is returned. Note: This filter cannot be used alone;
     *                       the transactionType must also be specified when filtering by transaction ID.
     *                       Below is the proper syntax to use if filtering by a specific transaction ID:
     *                       https://apiz.ebay.com/sell/finances/v1/transaction?filter=transactionId:{03-03620-33763}&amp;filter=transactionType:{SALE}
     *                       orderId: the unique identifier of a sales order. For any other monetary
     *                       transaction, the transactionId filter should be used instead. Only the sales
     *                       order defined by the identifier is returned. Below is the proper syntax to use
     *                       if filtering by a specific order ID:
     *                       https://apiz.ebay.com/sell/finances/v1/transaction?filter=orderId:{03-03620-33763}
     *                       For implementation help, refer to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/sell/finances/types/cos:FilterField
     *                       'sort'	string	Sorting is not yet available for the getTransactions method. By
     *                       default, monetary transactions that match the input criteria are sorted in
     *                       descending order according to the transaction date. For implementation help,
     *                       refer to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/sell/finances/types/cos:SortField
     *                       'limit'	string	The number of monetary transactions to return per page of the
     *                       result set. Use this parameter in conjunction with the offset parameter to
     *                       control the pagination of the output. For example, if offset is set to 10 and
     *                       limit is set to 10, the method retrieves monetary transactions 11 thru 20 from
     *                       the result set. Note: This feature employs a zero-based list, where the first
     *                       item in the list has an offset of 0. If an orderId, transactionId, or payoutId
     *                       filter is included in the request, any limit value will be ignored. Maximum:
     *                       1000 Default: 20
     *                       'offset'	string	This integer value indicates the actual position that the first
     *                       monetary transaction returned on the current page has in the results set. So, if
     *                       you wanted to view the 11th monetary transaction of the result set, you would
     *                       set the offset value in the request to 10. In the request, you can use the
     *                       offset parameter in conjunction with the limit parameter to control the
     *                       pagination of the output. For example, if offset is set to 30 and limit is set
     *                       to 10, the method retrieves transactions 31 thru 40 from the resulting
     *                       collection of transactions. Note: This feature employs a zero-based list, where
     *                       the first item in the list has an offset of 0. Default: 0 (zero)
     *
     * @return Transactions
     */
    public function gets(array $queries = []): Transactions
    {
        return $this->client->request('getTransactions', 'GET', 'transaction',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method is used to retrieve cumulative values for five types of monetary
     * transactions (order sales, seller credits, buyer refunds, buyer-initiated
     * payment disputes, eBay shipping label purchases, and transfers). If applicable,
     * the number of payment holds and the amount of the holds are also returned. See
     * the description for the filter query parameter for more information on the
     * available filters. Note: Unless the transactionType filter is used to retrieve a
     * specific type of monetary transaction (sale, buyer refund, seller credit,
     * payment dispute, shipping label, transfer), the creditCount and creditAmount
     * response fields account for both order sales and seller credits (the count and
     * value is not distinguished between the two monetary transaction types).
     *
     * @param array $queries options:
     *                       'filter'	string	Numerous filters are available for the getTransactionSummary
     *                       method, and these filters are discussed below. One or more of these filter types
     *                       can be used. The transactionStatus filter must be used. All other filters are
     *                       optional. transactionStatus: the data returned in the response pertains to the
     *                       sales, payouts, and transfer status set. The supported transactionStatus values
     *                       are as follows: PAYOUT: only consider monetary transactions where the proceeds
     *                       from the sales order(s) have been paid out to the seller's bank account.
     *                       FUNDS_PROCESSING: only consider monetary transactions where the proceeds from
     *                       the sales order(s) are currently being processed. FUNDS_AVAILABLE_FOR_PAYOUT:
     *                       only consider monetary transactions where the proceeds from the sales order(s)
     *                       are available for a seller payout, but processing has not yet begun.
     *                       FUNDS_ON_HOLD: only consider monetary transactions where the proceeds from the
     *                       sales order(s) are currently being held by eBay, and are not yet available for a
     *                       seller payout. COMPLETED: this indicates that the funds for the corresponding
     *                       TRANSFER monetary transaction have transferred and the transaction has
     *                       completed. FAILED: this indicates the process has failed for the corresponding
     *                       TRANSFER monetary transaction. Below is the proper syntax to use when setting up
     *                       the transactionStatus filter:
     *                       https://apiz.ebay.com/sell/finances/v1/transaction_summary?filter=transactionStatus:{PAYOUT}
     *                       transactionDate: only consider monetary transactions that occurred within a
     *                       specific range of dates. Note: All dates must be input using UTC format
     *                       (YYYY-MM-DDTHH:MM:SS.SSSZ) and should be adjusted accordingly for the local
     *                       timezone of the user. Below is the proper syntax to use if filtering by a date
     *                       range:
     *                       https://apiz.ebay.com/sell/finances/v1/transaction_summary?filter=transactionDate:[2018-10-23T00:00:01.000Z..2018-11-09T00:00:01.000Z]
     *                       Alternatively, the user could omit the ending date, and the date range would
     *                       include the starting date and up to 90 days past that date, or the current date
     *                       if the starting date is less than 90 days in the past. transactionType: only
     *                       consider a specific type of monetary transaction. The supported transactionType
     *                       values are as follows: SALE: a sales order. REFUND: a refund to the buyer after
     *                       an order cancellation or return. CREDIT: a credit issued by eBay to the seller's
     *                       account. DISPUTE: a monetary transaction associated with a payment dispute
     *                       between buyer and seller. NON_SALE_CHARGE: a monetary transaction involving a
     *                       seller transferring money to eBay for the balance of a charge for
     *                       NON_SALE_CHARGE transactions (transactions that contain non-transactional seller
     *                       fees). These can include a one-time payment, monthly/yearly subscription fees
     *                       charged monthly, NRC charges, and fee credits. SHIPPING_LABEL: a monetary
     *                       transaction where eBay is billing the seller for an eBay shipping label. Note
     *                       that the shipping label functionality will initially only be available to a
     *                       select number of sellers. TRANSFER: A transfer is a monetary transaction where
     *                       eBay is billing the seller for reimbursement of a charge. An example of a
     *                       transfer is a seller reimbursing eBay for a buyer refund.Below is the proper
     *                       syntax to use if filtering by a monetary transaction type:
     *                       https://apiz.ebay.com/sell/finances/v1/transaction_summary?filter=transactionType:{SALE}
     *                       buyerUsername: only consider monetary transactions involving a specific buyer
     *                       (specified with the buyer's eBay user ID). Below is the proper syntax to use if
     *                       filtering by a specific eBay buyer:
     *                       https://apiz.ebay.com/sell/finances/v1/transaction_summary?filter=buyerUsername:{buyer1234}
     *                       salesRecordReference: only consider monetary transactions corresponding to a
     *                       specific order (identified with a Selling Manager order identifier). Below is
     *                       the proper syntax to use if filtering by a specific Selling Manager Sales Record
     *                       ID:
     *                       https://apiz.ebay.com/sell/finances/v1/transaction_summary?filter=salesRecordReference:{123}
     *                       Note: For all orders originating after February 1, 2020, a value of 0 will be
     *                       returned in the salesRecordReference field. So, this filter will only be useful
     *                       to retrieve orders than occurred before this date. payoutId: only consider
     *                       monetary transactions related to a specific seller payout (identified with a
     *                       Payout ID). This value is auto-generated by eBay once the seller payout is set
     *                       to be processed. Below is the proper syntax to use if filtering by a specific
     *                       Payout ID:
     *                       https://apiz.ebay.com/sell/finances/v1/transaction_summary?filter=payoutId:{5000106638}
     *                       transactionId: the unique identifier of a monetary transaction. For a sales
     *                       order, the orderId filter should be used instead. Only the monetary
     *                       transaction(s) associated with this transactionId value are returned. Note: This
     *                       filter cannot be used alone; the transactionType must also be specified when
     *                       filtering by transaction ID. Below is the proper syntax to use if filtering by a
     *                       specific transaction ID:
     *                       https://apiz.ebay.com/sell/finances/v1/transaction_summary?filter=transactionId:{03-03620-33763}&amp;filter=transactionType:{SALE}
     *                       orderId: the unique identifier of a sales order. For any other monetary
     *                       transaction, the transactionId filter should be used instead. Only the monetary
     *                       transaction(s) associated with this orderId value are returned. Below is the
     *                       proper syntax to use if filtering by a specific order ID:
     *                       https://apiz.ebay.com/sell/finances/v1/transaction_summary?filter=orderId:{03-03620-33763}
     *                       For implementation help, refer to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/sell/finances/types/cos:FilterField
     *
     * @return TransactionSummaryResponse
     */
    public function getSummary(array $queries = []): TransactionSummaryResponse
    {
        return $this->client->request('getTransactionSummary', 'GET', 'transaction_summary',
            [
                'query' => $queries,
            ]
        );
    }
}
