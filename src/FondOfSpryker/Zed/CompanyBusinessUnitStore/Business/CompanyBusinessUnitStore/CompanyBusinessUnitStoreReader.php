<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore;

use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreRepositoryInterface;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;

class CompanyBusinessUnitStoreReader implements CompanyBusinessUnitStoreReaderInterface
{
    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreRepositoryInterface
     */
    protected $companyBusinessUnitStoreRepository;

    /**
     * @param \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreRepositoryInterface $companyBusinessUnitStoreRepository
     */
    public function __construct(CompanyBusinessUnitStoreRepositoryInterface $companyBusinessUnitStoreRepository)
    {
        $this->companyBusinessUnitStoreRepository = $companyBusinessUnitStoreRepository;
    }

    /**
     * @param int $companyBusinessUnitStoreId
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer|null
     */
    public function findCompanyBusinessUnitStoreById(int $companyBusinessUnitStoreId): ?CompanyBusinessUnitStoreTransfer
    {
        return $this->companyBusinessUnitStoreRepository->findCompanyBusinessUnitStoreById($companyBusinessUnitStoreId);
    }

    /**
     * @param int $companyBusinessUnitId
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer[]
     */
    public function findCompanyBusinessUnitStoresByCompanyBusinessUnitId(int $companyBusinessUnitId): array
    {
        return $this->companyBusinessUnitStoreRepository->findCompanyBusinessUnitStoresByCompanyBusinessUnitId($companyBusinessUnitId);
    }
}
