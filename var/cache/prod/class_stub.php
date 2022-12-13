<?php

class CMS extends CMSCore {};
class PrestaShopModuleException extends PrestaShopModuleExceptionCore {};
class PrestaShopException extends PrestaShopExceptionCore {};
class PrestaShopPaymentException extends PrestaShopPaymentExceptionCore {};
class PrestaShopObjectNotFoundException extends PrestaShopObjectNotFoundExceptionCore {};
class PrestaShopDatabaseException extends PrestaShopDatabaseExceptionCore {};
class Cookie extends CookieCore {};
class Pack extends PackCore {};
class ProductPresenterFactory extends ProductPresenterFactoryCore {};
class Language extends LanguageCore {};
class Shop extends ShopCore {};
class ShopUrl extends ShopUrlCore {};
class ShopGroup extends ShopGroupCore {};
abstract class AbstractLogger extends AbstractLoggerCore {};
class FileLogger extends FileLoggerCore {};
class Meta extends MetaCore {};
class Tools extends ToolsCore {};
class Delivery extends DeliveryCore {};
class AddressChecksum extends AddressChecksumCore {};
class StockAvailable extends StockAvailableCore {};
class StockManagerFactory extends StockManagerFactoryCore {};
class WarehouseProductLocation extends WarehouseProductLocationCore {};
class StockManager extends StockManagerCore {};
class SupplyOrderHistory extends SupplyOrderHistoryCore {};
class Stock extends StockCore {};
class SupplyOrder extends SupplyOrderCore {};
class SupplyOrderReceiptHistory extends SupplyOrderReceiptHistoryCore {};
class StockMvtReason extends StockMvtReasonCore {};
abstract class StockManagerModule extends StockManagerModuleCore {};
class SupplyOrderState extends SupplyOrderStateCore {};
class StockMvtWS extends StockMvtWSCore {};
class StockMvt extends StockMvtCore {};
class SupplyOrderDetail extends SupplyOrderDetailCore {};
class Warehouse extends WarehouseCore {};
class CustomerMessage extends CustomerMessageCore {};
class MetaLang extends MetaLangCore {};
class ProfileLang extends ProfileLangCore {};
class CmsCategoryLang extends CmsCategoryLangCore {};
class OrderStateLang extends OrderStateLangCore {};
class FeatureValueLang extends FeatureValueLangCore {};
class SupplyOrderStateLang extends SupplyOrderStateLangCore {};
class FeatureLang extends FeatureLangCore {};
class QuickAccessLang extends QuickAccessLangCore {};
class OrderReturnStateLang extends OrderReturnStateLangCore {};
class ContactLang extends ContactLangCore {};
class TabLang extends TabLangCore {};
class RiskLang extends RiskLangCore {};
class ConfigurationLang extends ConfigurationLangCore {};
class CarrierLang extends CarrierLangCore {};
class GenderLang extends GenderLangCore {};
class AttributeGroupLang extends AttributeGroupLangCore {};
class OrderMessageLang extends OrderMessageLangCore {};
class AttributeLang extends AttributeLangCore {};
class GroupLang extends GroupLangCore {};
class CategoryLang extends CategoryLangCore {};
class StockMvtReasonLang extends StockMvtReasonLangCore {};
class ThemeLang extends ThemeLangCore {};
class DataLang extends DataLangCore {};
class Configuration extends ConfigurationCore {};
class LocalizationPack extends LocalizationPackCore {};
class ConfigurationKPI extends ConfigurationKPICore {};
class Translate extends TranslateCore {};
class ProductAssembler extends ProductAssemblerCore {};
class Country extends CountryCore {};
class Risk extends RiskCore {};
class Manufacturer extends ManufacturerCore {};
class DateRange extends DateRangeCore {};
abstract class Cache extends CacheCore {};
class CacheMemcached extends CacheMemcachedCore {};
class CacheApc extends CacheApcCore {};
class CacheMemcache extends CacheMemcacheCore {};
class CacheXcache extends CacheXcacheCore {};
class Image extends ImageCore {};
abstract class ObjectModel extends ObjectModelCore {};
class PhpEncryption extends PhpEncryptionCore {};
class CSV extends CSVCore {};
class ProductSupplier extends ProductSupplierCore {};
class SearchEngine extends SearchEngineCore {};
class CustomerSession extends CustomerSessionCore {};
class SpecificPriceFormatter extends SpecificPriceFormatterCore {};
class ConfigurationTest extends ConfigurationTestCore {};
class TaxRule extends TaxRuleCore {};
class Tax extends TaxCore {};
abstract class TaxManagerModule extends TaxManagerModuleCore {};
class TaxManagerFactory extends TaxManagerFactoryCore {};
class TaxRulesGroup extends TaxRulesGroupCore {};
class TaxCalculator extends TaxCalculatorCore {};
class TaxRulesTaxManager extends TaxRulesTaxManagerCore {};
class TaxConfiguration extends TaxConfigurationCore {};
class GroupReduction extends GroupReductionCore {};
class Alias extends AliasCore {};
class Tag extends TagCore {};
class PrestaShopBackup extends PrestaShopBackupCore {};
class ConnectionsSource extends ConnectionsSourceCore {};
class CustomizationField extends CustomizationFieldCore {};
class OrderPayment extends OrderPaymentCore {};
class OrderInvoice extends OrderInvoiceCore {};
class OrderReturn extends OrderReturnCore {};
class OrderDetail extends OrderDetailCore {};
class Order extends OrderCore {};
class OrderState extends OrderStateCore {};
class OrderMessage extends OrderMessageCore {};
class OrderReturnState extends OrderReturnStateCore {};
class OrderDiscount extends OrderDiscountCore {};
class OrderSlip extends OrderSlipCore {};
class OrderCarrier extends OrderCarrierCore {};
class OrderHistory extends OrderHistoryCore {};
class OrderCartRule extends OrderCartRuleCore {};
class CustomerAddress extends CustomerAddressCore {};
class Store extends StoreCore {};
class CMSRole extends CMSRoleCore {};
class Cart extends CartCore {};
class Profile extends ProfileCore {};
class Feature extends FeatureCore {};
class FeatureValue extends FeatureValueCore {};
class ManufacturerAddress extends ManufacturerAddressCore {};
class Media extends MediaCore {};
class Category extends CategoryCore {};
class Contact extends ContactCore {};
class CustomerThread extends CustomerThreadCore {};
class LinkProxy extends LinkProxyCore {};
class FileUploader extends FileUploaderCore {};
class QqUploadedFileForm extends QqUploadedFileFormCore {};
class RangePrice extends RangePriceCore {};
class RangeWeight extends RangeWeightCore {};
class Hook extends HookCore {};
class Referrer extends ReferrerCore {};
class RequestSql extends RequestSqlCore {};
class Attribute extends AttributeCore {};
class AttributeGroup extends AttributeGroupCore {};
class SpecificPrice extends SpecificPriceCore {};
class Supplier extends SupplierCore {};
class Zone extends ZoneCore {};
class QuickAccess extends QuickAccessCore {};
class ImageManager extends ImageManagerCore {};
class TreeToolbarSearch extends TreeToolbarSearchCore {};
class TreeToolbarSearchCategories extends TreeToolbarSearchCategoriesCore {};
class TreeToolbarLink extends TreeToolbarLinkCore {};
class Tree extends TreeCore {};
class TreeToolbar extends TreeToolbarCore {};
abstract class TreeToolbarButton extends TreeToolbarButtonCore {};
class WebserviceOutputXML extends WebserviceOutputXMLCore {};
class WebserviceRequest extends WebserviceRequestCore {};
class WebserviceOutputJSON extends WebserviceOutputJSONCore {};
class WebserviceSpecificManagementImages extends WebserviceSpecificManagementImagesCore {};
class WebserviceException extends WebserviceExceptionCore {};
class WebserviceKey extends WebserviceKeyCore {};
class WebserviceSpecificManagementAttachments extends WebserviceSpecificManagementAttachmentsCore {};
class WebserviceSpecificManagementSearch extends WebserviceSpecificManagementSearchCore {};
class WebserviceOutputBuilder extends WebserviceOutputBuilderCore {};
class SupplierAddress extends SupplierAddressCore {};
class HTMLTemplateOrderReturn extends HTMLTemplateOrderReturnCore {};
abstract class HTMLTemplate extends HTMLTemplateCore {};
class PDF extends PDFCore {};
class HTMLTemplateDeliverySlip extends HTMLTemplateDeliverySlipCore {};
class PDFGenerator extends PDFGeneratorCore {};
class HTMLTemplateOrderSlip extends HTMLTemplateOrderSlipCore {};
class HTMLTemplateInvoice extends HTMLTemplateInvoiceCore {};
class HTMLTemplateSupplyOrderForm extends HTMLTemplateSupplyOrderFormCore {};
class Gender extends GenderCore {};
class ValidateConstraintTranslator extends ValidateConstraintTranslatorCore {};
class Validate extends ValidateCore {};
class Context extends ContextCore {};
class Page extends PageCore {};
class TemplateFinder extends TemplateFinderCore {};
class SmartyCustom extends SmartyCustomCore {};
class SmartyResourceModule extends SmartyResourceModuleCore {};
class SmartyCustomTemplate extends SmartyCustomTemplateCore {};
class SmartyDevTemplate extends SmartyDevTemplateCore {};
class SmartyResourceParent extends SmartyResourceParentCore {};
class Customer extends CustomerCore {};
class ModuleFrontController extends ModuleFrontControllerCore {};
class FrontController extends FrontControllerCore {};
abstract class Controller extends ControllerCore {};
abstract class ModuleAdminController extends ModuleAdminControllerCore {};
abstract class ProductListingFrontController extends ProductListingFrontControllerCore {};
abstract class ProductPresentingFrontController extends ProductPresentingFrontControllerCore {};
class AdminController extends AdminControllerCore {};
class CartRule extends CartRuleCore {};
class Connection extends ConnectionCore {};
class Windows extends WindowsCore {};
class ProductDownload extends ProductDownloadCore {};
class Dispatcher extends DispatcherCore {};
class PrestaShopLogger extends PrestaShopLoggerCore {};
class Group extends GroupCore {};
class AddressFormat extends AddressFormatCore {};
abstract class ModuleGraphEngine extends ModuleGraphEngineCore {};
abstract class ModuleGridEngine extends ModuleGridEngineCore {};
abstract class ModuleGrid extends ModuleGridCore {};
abstract class Module extends ModuleCore {};
abstract class ModuleGraph extends ModuleGraphCore {};
abstract class CarrierModule extends CarrierModuleCore {};
class Chart extends ChartCore {};
class ImageType extends ImageTypeCore {};
class Notification extends NotificationCore {};
class TranslatedConfiguration extends TranslatedConfigurationCore {};
class Upgrader extends UpgraderCore {};
class ProductSale extends ProductSaleCore {};
class HelperKpiRow extends HelperKpiRowCore {};
class HelperUploader extends HelperUploaderCore {};
class HelperTreeCategories extends HelperTreeCategoriesCore {};
class HelperShop extends HelperShopCore {};
class HelperCalendar extends HelperCalendarCore {};
class HelperImageUploader extends HelperImageUploaderCore {};
class HelperView extends HelperViewCore {};
class HelperOptions extends HelperOptionsCore {};
class Helper extends HelperCore {};
class HelperList extends HelperListCore {};
class HelperKpi extends HelperKpiCore {};
class HelperTreeShops extends HelperTreeShopsCore {};
class HelperForm extends HelperFormCore {};
class PhpEncryptionEngine extends PhpEncryptionEngineCore {};
class Search extends SearchCore {};
class Customization extends CustomizationCore {};
class State extends StateCore {};
class Link extends LinkCore {};
class Mail extends MailCore {};
class Employee extends EmployeeCore {};
class Access extends AccessCore {};
class WarehouseAddress extends WarehouseAddressCore {};
class SpecificPriceRule extends SpecificPriceRuleCore {};
class EmployeeSession extends EmployeeSessionCore {};
class Carrier extends CarrierCore {};
class Attachment extends AttachmentCore {};
abstract class PaymentModule extends PaymentModuleCore {};
class Curve extends CurveCore {};
class QqUploadedFileXhr extends QqUploadedFileXhrCore {};
class PrestaShopCollection extends PrestaShopCollectionCore {};
class Address extends AddressCore {};
class Message extends MessageCore {};
class Currency extends CurrencyCore {};
class CMSCategory extends CMSCategoryCore {};
abstract class AbstractAssetManager extends AbstractAssetManagerCore {};
class CssMinifier extends CssMinifierCore {};
class StylesheetManager extends StylesheetManagerCore {};
class JsMinifier extends JsMinifierCore {};
class JavascriptManager extends JavascriptManagerCore {};
class CccReducer extends CccReducerCore {};
class Uploader extends UploaderCore {};
class CustomerAddressFormatter extends CustomerAddressFormatterCore {};
class CustomerForm extends CustomerFormCore {};
class CustomerAddressForm extends CustomerAddressFormCore {};
class CustomerPersister extends CustomerPersisterCore {};
class CustomerLoginFormatter extends CustomerLoginFormatterCore {};
class CustomerAddressPersister extends CustomerAddressPersisterCore {};
abstract class AbstractForm extends AbstractFormCore {};
class CustomerLoginForm extends CustomerLoginFormCore {};
class FormField extends FormFieldCore {};
class CustomerFormatter extends CustomerFormatterCore {};
class Guest extends GuestCore {};
class DbQuery extends DbQueryCore {};
class DbMySQLi extends DbMySQLiCore {};
class DbPDO extends DbPDOCore {};
abstract class Db extends DbCore {};
abstract class AbstractCheckoutStep extends AbstractCheckoutStepCore {};
class CheckoutPersonalInformationStep extends CheckoutPersonalInformationStepCore {};
class CheckoutDeliveryStep extends CheckoutDeliveryStepCore {};
class AddressValidator extends AddressValidatorCore {};
class ConditionsToApproveFinder extends ConditionsToApproveFinderCore {};
class CheckoutProcess extends CheckoutProcessCore {};
class CheckoutSession extends CheckoutSessionCore {};
class CheckoutAddressesStep extends CheckoutAddressesStepCore {};
class CheckoutPaymentStep extends CheckoutPaymentStepCore {};
class DeliveryOptionsFinder extends DeliveryOptionsFinderCore {};
class PaymentOptionsFinder extends PaymentOptionsFinderCore {};
class CartChecksum extends CartChecksumCore {};
class Tab extends TabCore {};
class Combination extends CombinationCore {};
class PhpEncryptionLegacyEngine extends PhpEncryptionLegacyEngineCore {};
class Product extends ProductCore {};