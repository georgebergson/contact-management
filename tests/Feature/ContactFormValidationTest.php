<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Contact; // Importe o modelo Contact

class ContactFormValidationTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function it_requires_name_contact_and_email_address_for_create_contact()
    {
        $contactData = Contact::factory()->count(1)->create()->toArray();

        $response = $this->post(route('contacts.store'), $contactData);

        $response->assertSessionHasErrors(['name', 'contact', 'email_address']);
    }

}
