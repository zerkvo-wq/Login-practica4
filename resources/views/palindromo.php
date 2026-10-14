<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Palíndromos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #0f172a;
            --card-bg: rgba(255, 255, 255, 0.05);
            --card-border: rgba(255, 255, 255, 0.1);
            --text-primary: #f1f5f9;
            --text-secondary: #94a3b8;
            --accent-start: #6366f1;
            --accent-end: #8b5cf6;
            --success: #22c55e;
            --danger: #ef4444;
            --radius: 24px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background: var(--bg);
            background-image:
                radial-gradient(circle at 20% 20%, rgba(99, 102, 241, 0.25), transparent 45%),
                radial-gradient(circle at 80% 80%, rgba(139, 92, 246, 0.25), transparent 45%),
                radial-gradient(circle at 50% 50%, rgba(14, 165, 233, 0.08), transparent 60%);
            color: var(--text-primary);
        }

        .card {
            width: 100%;
            max-width: 520px;
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--card-border);
            border-radius: var(--radius);
            padding: 48px 40px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 0.7s ease both;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(99, 102, 241, 0.15);
            border: 1px solid rgba(99, 102, 241, 0.3);
            color: #a5b4fc;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            padding: 6px 14px;
            border-radius: 999px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 32px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 12px;
            background: linear-gradient(135deg, #e0e7ff, #c7d2fe);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p.subtitle {
            color: var(--text-secondary);
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 32px;
        }

        .field {
            margin-bottom: 24px;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: var(--text-secondary);
            margin-bottom: 10px;
            letter-spacing: 0.02em;
        }

        input[type="text"] {
            width: 100%;
            padding: 16px 18px;
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            color: var(--text-primary);
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 14px;
            outline: none;
            transition: border-color 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
        }

        input[type="text"]::placeholder {
            color: rgba(148, 163, 184, 0.6);
        }

        input[type="text"]:focus {
            border-color: var(--accent-start);
            background: rgba(255, 255, 255, 0.09);
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.25);
        }

        button {
            width: 100%;
            padding: 16px 20px;
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 700;
            color: #ffffff;
            background: linear-gradient(135deg, var(--accent-start), var(--accent-end));
            border: none;
            border-radius: 14px;
            cursor: pointer;
            transition: transform 0.25s ease, box-shadow 0.25s ease, filter 0.25s ease;
            box-shadow: 0 10px 25px -8px rgba(99, 102, 241, 0.6);
        }

        button:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 16px 35px -8px rgba(99, 102, 241, 0.8);
            filter: brightness(1.08);
        }

        button:active {
            transform: translateY(-1px) scale(0.99);
        }

        button:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        #resultado {
            display: none;
            margin-top: 28px;
            padding: 20px 22px;
            border-radius: 16px;
            font-size: 16px;
            font-weight: 600;
            line-height: 1.5;
            border: 1px solid;
            animation: fadeInUp 0.5s ease both;
        }

        #resultado.success {
            background: rgba(34, 197, 94, 0.12);
            border-color: rgba(34, 197, 94, 0.35);
            color: #86efac;
        }

        #resultado.error {
            background: rgba(239, 68, 68, 0.12);
            border-color: rgba(239, 68, 68, 0.35);
            color: #fca5a5;
        }

        .hint {
            margin-top: 24px;
            font-size: 13px;
            color: rgba(148, 163, 184, 0.7);
            text-align: center;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 480px) {
            .card {
                padding: 36px 24px;
            }
            h1 {
                font-size: 26px;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <span class="badge">✨ Herramienta</span>
        <h1>Verificador de Palíndromos</h1>
        <p class="subtitle">
            Escribe una palabra o frase y descubre si se lee igual de izquierda a derecha
            que de derecha a izquierda, ignorando espacios, mayúsculas y signos.
        </p>

        <div class="field">
            <label for="textoInput">Texto a verificar</label>
            <input
                type="text"
                id="textoInput"
                placeholder="Ej: Anita lava la tina"
                autocomplete="off"
            >
        </div>

        <button id="btnVerificar" onclick="verificarPalindromo()">
            Verificar
        </button>

        <div id="resultado"></div>

        <p class="hint">💡 Prueba con: "reconocer", "Somos o no somos", "A man, a plan, a canal: Panama"</p>
    </div>

    <script>
        async function verificarPalindromo() {
            const input = document.getElementById('textoInput');
            const resultado = document.getElementById('resultado');
            const btn = document.getElementById('btnVerificar');
            const texto = input.value.trim();

            if (texto === '') {
                resultado.className = 'error';
                resultado.innerHTML = '⚠️ Por favor, escribe un texto para verificar.';
                resultado.style.display = 'block';
                resultado.style.animation = 'none';
                void resultado.offsetWidth;
                resultado.style.animation = '';
                input.focus();
                return;
            }

            btn.disabled = true;
            btn.textContent = 'Verificando...';

            try {
                const formData = new FormData();
                formData.append('texto', texto);

                const response = await fetch('/palindromo/verificar', {
                    method: 'POST',
                    body: formData
                });

                if (!response.ok) {
                    throw new Error('Error en la solicitud');
                }

                const data = await response.json();

                if (data.es_palindromo) {
                    resultado.className = 'success';
                    resultado.innerHTML = '✅ ' + data.mensaje;
                } else {
                    resultado.className = 'error';
                    resultado.innerHTML = '❌ ' + data.mensaje;
                }

                resultado.style.display = 'block';
                resultado.style.animation = 'none';
                void resultado.offsetWidth;
                resultado.style.animation = '';
            } catch (err) {
                resultado.className = 'error';
                resultado.innerHTML = '🚫 Ocurrió un error al verificar. Inténtalo de nuevo.';
                resultado.style.display = 'block';
                resultado.style.animation = 'none';
                void resultado.offsetWidth;
                resultado.style.animation = '';
            } finally {
                btn.disabled = false;
                btn.textContent = 'Verificar';
            }
        }
    </script>
</body>
</html>
