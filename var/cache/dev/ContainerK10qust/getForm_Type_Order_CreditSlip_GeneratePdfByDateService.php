<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.order.credit_slip.generate_pdf_by_date' shared service.

return $this->services['form.type.order.credit_slip.generate_pdf_by_date'] = new \PrestaShopBundle\Form\Admin\Sell\Order\CreditSlip\GeneratePdfByDateType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getLanguages());
