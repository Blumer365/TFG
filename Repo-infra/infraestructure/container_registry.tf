data "azurerm_resource_group" "prueba" {
  name = "tfg"
}

locals{
  suffix = "bad"
  namespace = "proyecto"
}

resource "azurerm_container_registry" "acr" {
  name                = "${local.namespace}acr${local.suffix}"
  resource_group_name = data.azurerm_resource_group.prueba.name
  location            = data.azurerm_resource_group.prueba.location
  sku                 = "Basic"
  admin_enabled       = false

  lifecycle {
    ignore_changes = [
      tags["BillingIdentifier2"],
      tags["CreationDate"],
      tags["Digital"],
      tags["Environment"],
      tags["Namespace"],
      tags["Service"],
      tags["SubProject"]
    ]
  }
}

resource "azurerm_user_assigned_identity" "identity" {
  location            = data.azurerm_resource_group.prueba.location
  name                = "${local.namespace}umi${local.suffix}"
  resource_group_name = data.azurerm_resource_group.prueba.name
}

resource "azurerm_role_assignment" "identity" {
  principal_id                     = azurerm_user_assigned_identity.identity.principal_id
  role_definition_name             = "AcrPull"
  scope                            = azurerm_container_registry.acr.id  
}
