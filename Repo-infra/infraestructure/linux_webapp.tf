resource "azurerm_service_plan" "pruebawebapp" {
  name                = "${local.namespace}plan${local.suffix}"
  resource_group_name = data.azurerm_resource_group.prueba.name
  location            = data.azurerm_resource_group.prueba.location
  os_type             = "Linux"
  sku_name            = "F1"
}

resource "azurerm_linux_web_app" "pruebawebapp" {
  name                = "${local.namespace}web${local.suffix}"
  resource_group_name = data.azurerm_resource_group.prueba.name
  location            = azurerm_service_plan.pruebawebapp.location
  service_plan_id     = azurerm_service_plan.pruebawebapp.id

  site_config {
    container_registry_managed_identity_client_id = azurerm_user_assigned_identity.identity.client_id
    container_registry_use_managed_identity       = true
    always_on = false

      application_stack {
        docker_registry_url = "https://${local.namespace}acr${local.suffix}.azurecr.io"
        docker_image_name = "myimage:v1"
      }
  }

    identity {
    type         = "UserAssigned"
    identity_ids = [azurerm_user_assigned_identity.identity.id]
  }
}
