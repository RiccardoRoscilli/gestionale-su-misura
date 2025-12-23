# Task Manager Integration

## Overview
This document describes the integration between the Gestionale Su Misura website and the Task Management system. When a user submits the lead form on the website, it automatically creates a ticket in the task management system.

## Architecture

```
Website Lead Form → LeadController → TaskManagerService → Task Manager API → Request Created
                                                      ↓
                                                   Customer Created/Updated
```

## Components

### 1. Website Side (gestionale-su-misura)

#### LeadController
- **File**: `app/Http/Controllers/LeadController.php`
- **Purpose**: Handles form submissions and creates tickets
- **Flow**:
  1. Validates form data
  2. Creates lead in local database
  3. Calls TaskManagerService to create ticket
  4. Updates lead with ticket information

#### TaskManagerService
- **File**: `app/Services/TaskManagerService.php`
- **Purpose**: Handles communication with task management API
- **Methods**:
  - `createTicketFromLead(Lead $lead)`: Creates ticket from lead
  - `testConnection()`: Tests API connectivity

#### Lead Model Updates
- **File**: `app/Models/Lead.php`
- **New Fields**:
  - `task_manager_request_id`: ID of created request
  - `task_manager_customer_id`: ID of customer in task manager
  - `source`, `utm_source`, `utm_medium`, `utm_campaign`: Tracking fields
- **New Statuses**:
  - `ticket_created`: Ticket successfully created
  - `ticket_failed`: Ticket creation failed

### 2. Task Manager Side (gestione-task)

#### API LeadController
- **File**: `app/Http/Controllers/Api/LeadController.php`
- **Endpoint**: `POST /api/leads/create`
- **Purpose**: Receives lead data and creates request + customer
- **Authentication**: API key based

#### Request Creation Flow
1. Validates incoming data
2. Finds or creates customer
3. Creates request with formatted description
4. Returns success/failure response

## Configuration

### Website (.env)
```env
TASK_MANAGER_URL=http://localhost:8001
TASK_MANAGER_API_KEY=gestionale_su_misura_2024_secure_key_12345
TASK_MANAGER_TIMEOUT=30
```

### Task Manager (.env)
```env
WEBSITE_API_KEY=gestionale_su_misura_2024_secure_key_12345
```

## API Specification

### POST /api/leads/create

**Request Body:**
```json
{
    "name": "Mario Rossi",
    "email": "mario@example.com",
    "phone": "+39 123 456 7890",
    "company": "Acme Corp",
    "description": "Vorrei un gestionale per...",
    "source": "website",
    "api_key": "gestionale_su_misura_2024_secure_key_12345"
}
```

**Success Response (200):**
```json
{
    "success": true,
    "message": "Richiesta creata con successo",
    "data": {
        "request_id": 123,
        "customer_id": 456
    }
}
```

**Error Response (422):**
```json
{
    "success": false,
    "message": "Dati non validi",
    "errors": {
        "email": ["The email field is required."]
    }
}
```

**Error Response (401):**
```json
{
    "success": false,
    "message": "API key non valida"
}
```

## Request Format in Task Manager

When a lead is converted to a request, it creates:

### Customer Record
- **Name**: From lead name
- **Email**: From lead email
- **Phone**: From lead phone (if provided)
- **Company**: From lead company (if provided)
- **Type**: Set to "prospect"
- **Note**: "Cliente creato automaticamente da richiesta demo sito web"

### Request Record
- **Title**: "Richiesta Demo - [Company or Name]"
- **Domain**: "gestionale-su-misura.it"
- **Type**: "new_application"
- **Status**: "new"
- **Description**: Formatted with contact info and requirements
- **Contact Info**: Name, email, phone from lead

### Description Format
```markdown
**RICHIESTA DEMO DA SITO WEB**

**Contatto:**
- Nome: Mario Rossi
- Email: mario@example.com
- Telefono: +39 123 456 7890
- Azienda: Acme Corp

**Descrizione Esigenze:**
[User's description from form]

**Fonte:** website
**Data Richiesta:** 23/12/2024 14:30
```

## Error Handling

### Graceful Degradation
- If task manager is unavailable, lead is still saved locally
- Lead status is set to `ticket_failed` for manual processing
- Error is logged for debugging

### Retry Logic
- No automatic retry (to avoid duplicates)
- Manual retry can be implemented via admin interface

### Logging
- All API calls are logged with request/response data
- Errors include full stack trace for debugging

## Testing

### Test Command
```bash
php artisan task-manager:test
```

This command tests the API connection and creates a test request.

### Manual Testing
1. Submit form on website
2. Check lead in database for `task_manager_request_id`
3. Verify request created in task management system
4. Check logs for any errors

## Monitoring

### Key Metrics
- Lead conversion rate to tickets
- API response times
- Error rates
- Failed ticket creations

### Log Files
- **Website**: `storage/logs/laravel.log`
- **Task Manager**: `storage/logs/laravel.log`

### Health Checks
- API endpoint availability
- Database connectivity
- Authentication validity

## Security

### API Key Management
- Unique API key for website integration
- Key stored in environment variables
- Key validation on every request

### Data Validation
- All input data validated before processing
- SQL injection protection via Eloquent ORM
- XSS protection on output

### Rate Limiting
- Consider implementing rate limiting on API endpoint
- Monitor for abuse patterns

## Deployment

### Production Setup
1. Update environment variables with production URLs
2. Generate secure API keys
3. Test connectivity between systems
4. Monitor initial requests

### Backup Plan
- If integration fails, leads are still captured locally
- Manual ticket creation process as fallback
- Email notifications for failed integrations

## Future Enhancements

### Possible Improvements
1. **Webhook Integration**: Task manager sends updates back to website
2. **Real-time Status**: Show ticket status on website
3. **Automatic Estimation**: AI-powered credit estimation
4. **Customer Portal**: Allow customers to track their requests
5. **Notification System**: Email/SMS notifications for status changes

### API Extensions
- GET endpoint to retrieve ticket status
- PUT endpoint to update lead information
- DELETE endpoint to cancel requests

## Troubleshooting

### Common Issues

**Connection Timeout**
- Check network connectivity
- Verify URLs in configuration
- Increase timeout values

**Authentication Errors**
- Verify API keys match
- Check environment variable loading
- Ensure keys are not expired

**Data Validation Errors**
- Check required fields
- Verify data formats
- Review validation rules

**Database Errors**
- Check database connectivity
- Verify table structures
- Review migration status

### Debug Steps
1. Check logs on both systems
2. Test API endpoint directly
3. Verify configuration values
4. Test with minimal data set
5. Check network connectivity