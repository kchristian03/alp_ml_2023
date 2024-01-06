import joblib
from flask import Flask, request, jsonify

# import ada_boost_model  # Import your model
loaded_model = joblib.load('model/ada_boost_model.pkl')

app = Flask(__name__)

@app.route('/predict_stroke', methods=['POST'])
def predict_stroke():
    data = request.get_json()  # Get the data from the PHP request
    prediction = loaded_model.predict(data)  # Use your model to predict
    return jsonify({'prediction': prediction})  # Return the prediction as JSON

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000)  # Start the API server
