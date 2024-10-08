<?php

/**
 * Class HpsPayPlanCustomerService
 */
class HpsPayPlanCustomerService extends HpsRestGatewayService
{
    /**
     * @param \HpsPayPlanCustomer $customer
     *
     * @return mixed
     */
    public function add(HpsPayPlanCustomer $customer)
    {
        $data = $customer->getEditableFieldsWithValues();
        $result = $this->doRequest($data, array(
            'verb'     => 'POST',
            'endpoint' => 'customers',
        ));
        return $this->hydrateObject($result, 'HpsPayPlanCustomer');
    }
    /**
     * @param \HpsPayPlanCustomer $customer
     *
     * @return mixed
     */
    public function edit(HpsPayPlanCustomer $customer)
    {
        $data = $customer->getEditableFieldsWithValues();
        $result = $this->doRequest($data, array(
            'verb'     => 'PUT',
            'endpoint' => 'customers/'.$customer->customerKey,
        ));
        return $this->hydrateObject($result, 'HpsPayPlanCustomer');
    }
    /**
     * @param array $searchFields
     *
     * @return object
     */
    public function findAll($searchFields = array())
    {
        // Cannot have an array as the root object
        // in a JSON document
        $data = $searchFields === array() ? (object)array() : $searchFields;
        $results = $this
            ->doRequest($data, array(
                'verb'     => 'POST',
                'endpoint' => 'searchCustomers',
            ));

        return $this->hydrateSearchResults($results, 'HpsPayPlanCustomer');
    }
    /**
     * @param $customer
     *
     * @return mixed
     */
    public function get($customer)
    {
        $id = null;
        if ($customer instanceof HpsPayPlanCustomer) {
            $id = $customer->customerKey;
        } else {
            $id = $customer;
        }
        $result = $this->doRequest(null, array(
            'verb'     => 'GET',
            'endpoint' => 'customers/'.$id,
        ));
        return $this->hydrateObject($result, 'HpsPayPlanCustomer');
    }
    /**
     * @param      $customer
     * @param bool $forceDelete
     *
     * @return mixed
     */
    public function delete($customer, $forceDelete = false)
    {
        $id = null;
        if ($customer instanceof HpsPayPlanCustomer) {
            $id = $customer->customerKey;
        } else {
            $id = $customer;
        }

        $data = array(
            'forceDelete' => $forceDelete,
        );
        return $this->doRequest($data, array(
            'verb'     => 'DELETE',
            'endpoint' => 'customers/'.$id,
        ));
    }
}
