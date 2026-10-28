import { NextResponse } from 'next/server';
import nodemailer from 'nodemailer';

export async function POST(req: Request) {
  try {
    const body = await req.json();
    const { name, phone, email, pestType, address, city, postalCode, surface, details, urgency } = body;

    // Basic validation
    if (!name || !phone) {
      return NextResponse.json(
        { error: 'Le nom et le numéro de téléphone sont obligatoires.' },
        { status: 400 }
      );
    }

    const targetEmail = process.env.CONTACT_EMAIL_TARGET || 'nmoualek@gmail.com';
    const smtpHost = process.env.SMTP_HOST || 'ssl0.ovh.net';
    const smtpPort = Number(process.env.SMTP_PORT) || 465;
    const smtpUser = process.env.SMTP_USER || 'contact@sosparasites.fr';
    const smtpPass = process.env.SMTP_PASS || '';

    // Transporter configuration for OVH SMTP
    const transporter = nodemailer.createTransport({
      host: smtpHost,
      port: smtpPort,
      secure: smtpPort === 465, // true for port 465, false for other ports
      auth: {
        user: smtpUser,
        pass: smtpPass,
      },
      tls: {
        rejectUnauthorized: false,
      },
    });

    const emailSubject = `🚨 NOUVELLE DEMANDE D'INTERVENTION - ${pestType || 'Nuisibles'} (${city || 'IDF/Marseille'})`;

    const htmlContent = `
      <div style="font-family: Arial, sans-serif; max-width: 650px; margin: 0 auto; background-color: #f8fafc; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0;">
        <div style="background-color: #dc2626; color: white; padding: 16px 24px; border-radius: 8px; text-align: center;">
          <h1 style="margin: 0; font-size: 22px;">🚨 SOS PARASITES - Nouvelle Demande d'Intervention</h1>
          <p style="margin: 6px 0 0 0; font-size: 14px;">Reçue depuis sosparasites.fr</p>
        </div>

        <div style="background-color: white; padding: 24px; border-radius: 8px; margin-top: 16px; border: 1px solid #cbd5e1;">
          <h2 style="color: #1e293b; font-size: 18px; border-bottom: 2px solid #dc2626; padding-bottom: 8px; margin-top: 0;">Coordonnées du Client</h2>
          <table style="width: 100%; border-collapse: collapse;">
            <tr>
              <td style="padding: 8px; font-weight: bold; width: 140px; color: #475569;">Nom Complet :</td>
              <td style="padding: 8px; color: #0f172a; font-size: 16px;">${name}</td>
            </tr>
            <tr>
              <td style="padding: 8px; font-weight: bold; color: #475569;">Téléphone :</td>
              <td style="padding: 8px; color: #dc2626; font-size: 18px; font-weight: bold;">
                <a href="tel:${phone}" style="color: #dc2626; text-decoration: none;">${phone}</a>
              </td>
            </tr>
            ${email ? `
            <tr>
              <td style="padding: 8px; font-weight: bold; color: #475569;">Email :</td>
              <td style="padding: 8px; color: #0f172a;">${email}</td>
            </tr>
            ` : ''}
            ${urgency ? `
            <tr>
              <td style="padding: 8px; font-weight: bold; color: #475569;">Niveau d'urgence :</td>
              <td style="padding: 8px; color: #dc2626; font-weight: bold;">${urgency}</td>
            </tr>
            ` : ''}
          </table>

          <h2 style="color: #1e293b; font-size: 18px; border-bottom: 2px solid #dc2626; padding-bottom: 8px; margin-top: 20px;">Détails du Logement / Intervention</h2>
          <table style="width: 100%; border-collapse: collapse;">
            <tr>
              <td style="padding: 8px; font-weight: bold; width: 140px; color: #475569;">Type de Nuisible :</td>
              <td style="padding: 8px; color: #0f172a; font-weight: bold;">${pestType || 'Non précisé'}</td>
            </tr>
            ${surface ? `
            <tr>
              <td style="padding: 8px; font-weight: bold; color: #475569;">Superficie :</td>
              <td style="padding: 8px; color: #0f172a;">${surface} m²</td>
            </tr>
            ` : ''}
            <tr>
              <td style="padding: 8px; font-weight: bold; color: #475569;">Ville / Secteur :</td>
              <td style="padding: 8px; color: #0f172a;">${city || 'Non précisé'} ${postalCode ? `(${postalCode})` : ''}</td>
            </tr>
            ${address ? `
            <tr>
              <td style="padding: 8px; font-weight: bold; color: #475569;">Adresse :</td>
              <td style="padding: 8px; color: #0f172a;">${address}</td>
            </tr>
            ` : ''}
          </table>

          ${details ? `
          <h2 style="color: #1e293b; font-size: 18px; border-bottom: 2px solid #dc2626; padding-bottom: 8px; margin-top: 20px;">Message & Compléments</h2>
          <p style="background-color: #f1f5f9; padding: 12px; border-radius: 6px; color: #334155; white-space: pre-line;">${details}</p>
          ` : ''}
        </div>

        <div style="text-align: center; margin-top: 20px; font-size: 12px; color: #64748b;">
          <p>Email généré automatiquement depuis <a href="https://sosparasites.fr" style="color: #dc2626;">sosparasites.fr</a></p>
          <p>Rappeler directement le client au <a href="tel:${phone}" style="color: #0284c7; font-weight: bold;">${phone}</a></p>
        </div>
      </div>
    `;

    const mailOptions = {
      from: `"SOS Parasites Contact" <${smtpUser}>`,
      to: targetEmail,
      replyTo: email || targetEmail,
      subject: emailSubject,
      text: `Nouvelle demande d'intervention SOS Parasites\n\nNom: ${name}\nTéléphone: ${phone}\nEmail: ${email || 'Non fourni'}\nNuisible: ${pestType || 'Non précisé'}\nVille: ${city || 'Non précisé'}\nSuperficie: ${surface || 'Non précisée'} m²\nMessage: ${details || 'Aucun message'}`,
      html: htmlContent,
    };

    // Send email
    if (smtpPass && smtpPass !== 'votre_mot_de_passe_ovh_ici') {
      await transporter.sendMail(mailOptions);
      console.log('Email sent successfully to', targetEmail);
    } else {
      console.warn('SMTP password is not configured in environment. Logged form data:', mailOptions);
    }

    return NextResponse.json({
      success: true,
      message: 'Votre demande a bien été envoyée ! Un technicien va vous rappeler très rapidement.',
    });
  } catch (error: any) {
    console.error('Error sending email via OVH SMTP:', error);
    return NextResponse.json(
      {
        error: 'Erreur lors de l\'envoi du message. Veuillez nous appeler directement au 07 71 50 26 78.',
        details: error?.message,
      },
      { status: 500 }
    );
  }
}
