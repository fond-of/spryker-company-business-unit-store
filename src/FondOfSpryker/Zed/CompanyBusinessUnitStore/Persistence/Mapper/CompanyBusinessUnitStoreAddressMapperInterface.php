<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\Mapper;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer;
use Generated\Shared\Transfer\FosCompanyBusinessUnitStoreAddressEntityTransfer;

interface CompanyBusinessUnitStoreAddressMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer
     * @param \Generated\Shared\Transfer\FosCompanyBusinessUnitStoreAddressEntityTransfer $fosCompanyBusinessUnitStoreAddressEntityTransfer
     *
     * @return \Generated\Shared\Transfer\FosCompanyBusinessUnitStoreAddressEntityTransfer
     */
    public function mapCompanyBusinessUnitStoreTransferToEntityTransfer(
        CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer,
        FosCompanyBusinessUnitStoreAddressEntityTransfer $fosCompanyBusinessUnitStoreAddressEntityTransfer
    ): FosCompanyBusinessUnitStoreAddressEntityTransfer;

    /**
     * @param \Generated\Shared\Transfer\FosCompanyBusinessUnitStoreAddressEntityTransfer $fosCompanyBusinessUnitStoreAddressEntityTransfer
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer
     */
    public function mapEntityTransferToCompanyBusinessUnitStoreTransfer(
        FosCompanyBusinessUnitStoreAddressEntityTransfer $fosCompanyBusinessUnitStoreAddressEntityTransfer,
        CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreTransfer
    ): CompanyBusinessUnitStoreAddressTransfer;
}
